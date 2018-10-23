<?php

namespace App\Http\Controllers;
use App\model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use Mail;
use URL;

class UserController extends Controller
{
    private $users;
    public function __construct(User $users) {
        $this->users = $users;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */   

    public function index($lg = null)
    {
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $traducao = trans('string.loginIndex');
        return view('index', compact('traducao'));
    }

    public function register($lg = null)
    {
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $traducao = trans('string.pageRegistro');
        return view('register', compact('traducao'));
    }
    public function repassword($lg = null)
    {
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $traducao = trans('string.pageRecuperarSenha');
        return view('forgot-password', compact('traducao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auths(Request $request,$lg = null)
    {
        $validate = validator($request->all(), [
            'email' => 'required|email|string|max:45',
            'password' => 'required|string|max:45|min:6']
        );
        if ($validate->fails()) {
            return back()
                ->withErrors(['errors' => 'Informações de acesso inválidos!'])
                ->withInput();
        }
        $credentical = ['email' => $request->get('email'), 'password' => $request->get('password')];
        if (auth()->guard('pcp')->attempt($credentical)) {
            return redirect('/pcp/'.$lg.'/painel');
        } else {            
            return back()
                ->withErrors(['errors' => 'Acesso inválidos!'])
                ->withInput();
        }
    }

    public function newUser(Request $request,$lg = null){
        $validate = validator($request->all(), [
            'name' => 'required|string|max:45',
            'lastName'=> 'required|string|max:45',
            'email' => 'required|email|string|max:45|unique:users,email',
            'password' => 'required|string|min:6|confirmed']
        );
        if ($validate->fails()) {
            return back()
                ->withErrors($validate)
                ->withInput();
        }
        
        try{
             //Recebe os valores dos campos
            $this->users->fill($request->all());
            $this->users->password = Hash::make($this->users->password);
            $this->users->nivel = 0;
            $this->users->status = 0;
            $this->users->save();
        }catch(\Exception $e){
            return back()
            ->withErrors(['mensagem' => ' Sorry something went worng'])
           // ->withErrors(['mensagem' => $e->getMessage()])
            ->withInput();
        }
        return back()->with('success', 'Cadastro realizado com sucesso!');

    }
    public function recoverPassword(Request $request,$lg = null){
        $validate = validator($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validate->fails()) {
            return back()
            ->withErrors($validate)
            ->withInput();
        }
        try{
            $this->users = User::where('email', $request->get('email'))->first();
            if($this->users){
                $this->users->email_verified_at = new \DateTime();
                $senha_new  = str_random(6);  
                $this->users->password = Hash::make($senha_new);              
                
                $token_relembre  = str_random(12);  
                $this->remember_token = Hash::make($token_relembre);  
                $this->users->update();
                $mens = 'Sua nova senha é : '.$senha_new;
                $mensagem = ['titulo' => 'Resetar sua senha',
                'mensagem' => $mens
                ];
                Mail::send(['html' => 'painel.email_template'], $mensagem, function($message) {                   
                    $message->from($this->users->email, $this->users->name);
                    $message->to($this->users->email);
                    $message->subject("Nova senha - System PCP");
                });
                return back()->with('success', 'Foi enviado um e-mail com a nova senha !');
            }else{
                return back()
                ->withErrors(['mensagem' => ' E-mail não registrado!'])
                ->withInput();
            }
        }catch(\Exception $e){
                return back()
                ->withErrors(['mensagem' => ' Sorry something went worng : '])
                ->withInput();
        }
    }
    
}

<?php


namespace App\Http\Controllers\Ecrans;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;





class LoginController extends Controller{


    public function getForm(Request $request)
    {
        return view('forms.login')->with('ldap', '');
    }

    public function postFormLdap(LoginRequest $request)
    {

        $login = $request->login;
        $password = $request->password;
        $user = null;

        try
        {

            $ds = ldap_connect(env('LDAP_SERVER'));
            $util = @ldap_bind($ds, 'uid='.$login.','.env('LDAP_BASE_DN'), $password);
            if ($util) {

                $dn = "ou=utilisateurs, o=vdm"; // zone de recherche
                $filter="(&(uid=".$login."*))"; // filtre de recherche : sur l'uid
                $justthese = array("sn", "givenname", "description"); // attributs recherchés
                $sr= @ldap_search($ds, $dn, $filter, $justthese);
                $info = @ldap_get_entries($ds, $sr);

                for ($i=0; $i<$info["count"]; $i++) {
                    $nom = $info[$i]["sn"][0];
                    $prenom = $info[$i]["givenname"][0];
                    $description = $info[$i]["description"][0];
                }
                $result = DB::select("select * from users where login = '".$login."'");
                if ($result != null) {
                    $request->session()->put('users', $result[0]->login);
                    //$request->session()->put('profil', $result[0]->profil);
                    $request->session()->put('nom', $nom);
                    $request->session()->put('prenom', $prenom);
                    $request->session()->put('description', $description);
                    ldap_close($ds);
                    return redirect('accueil');
                }
                else {
                    ldap_close($ds);
                    return view('forms.login')->with('ldap', "Vous n'avez pas les droits d'accès");
                }
            } else {
                ldap_close($ds);
                return view('forms.login')->with('ldap', "Erreur d'identification");

            }
        }
        catch (Exception $e)
        {
            $error_msg = 'Erreur LDAP : '.$e;
            ldap_close($ds);
            print_r("Exception ".$e);
            exit;
        }
    }

    public function postFormPublic(LoginRequest $request)
    {

        $login = $request->login;
        $password = $request->password;
        $user = null;
        $result = DB::select("select * from users where login = '".$login."'");
        if ($result != null) {
            $request->session()->put('users', $result[0]->login);
            //$request->session()->put('profil', $result[0]->profil);
            $nom = $result[0]->name;
            $request->session()->put('nom', $nom);
            //$request->session()->put('prenom', $prenom);
            //$request->session()->put('description', $description);

            return redirect('accueil');
        }
        else {

            return view('forms.login')->with('ldap', "Vous n'avez pas les droits d'accès");
        }
    }
 }



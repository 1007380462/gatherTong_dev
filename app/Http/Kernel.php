<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
//        \App\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    ];
    public function ad(){
        //connect
        $server = 'localhost';
        $user = 'root';
        $pwd = '';
        $dbName = 'recomend_system';
        $db = mysqli_connect($server, $user, $pwd, $dbName);
        $newId='';
        for($id=0;$id<=28639;$id++){
            $sql="select id from tableName where id=".$id;
            $result = mysqli_query($db, $sql);
            $result = mysqli_fetch_all($result);
            $ID=$result[0][0];

            $newOption='';
            for(;;){
                $sql="select newoption from tableName where id=".$newId;
                $result = mysqli_query($db, $sql);
                $result = mysqli_fetch_all($result);
                $newOption=$result[0][0];
                //execute sql statement
                if($newId>1111){
                    break;
                }
                if(empty($result)){
                    $newId++;
                }else{
                    $newOption='';
                    break;
                }
            }
            if(empty($newOption)){
                break;
            }
            $sql="insert into TABLE_NAME ()VALUES (".$ID.",".$newOption.")";
            $result = mysqli_query($db, $sql);
            $result = mysqli_fetch_all($result);
            //execute sql statement;

        }


    }
}

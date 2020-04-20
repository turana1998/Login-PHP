<?php 

class CRUD{

    public function  adminLogin($post){
        global $db;
        try {
            $admin_login=$db->prepare("SELECT * FROM registrition WHERE email=:eemmaaiill AND  pasword=:ppsswd ");
            $admin_login->execute([
                "eemmaaiill"=>$post["login_email"],
                "ppsswd"=>$post["login_pass"]   
            ]);
            if($admin_login->rowCount()){
                return 1;
            }else{
                return 0;
            }    
            
        } catch (Exception $th) {
            return 0;
            //return ["sts"=>0,"msg"=>"No"] ;
        }
    }
    //bele islemis sayilir ? men gormurem niye demirsen :D men nece gorum? ikisinede eyni seyi yaziram))s
    // bu admin loginidi yheee? o biri seyfe hazirdi hara yonleneceyi ? yonlenmir harasa swal edecekdimki emaile uygun parol sehvdise sehvdi desin
    //oldugu seyfee ?he
    //cunki o biri seyfelere gedesi olsa bu kodlarda deyisiklik etmeli olacan yo swal cixaracaq
    // bunlaro bilirsen yagin billem e men de yazdim olmadi olacag niye telesirsen )))
    // public function Select()
    // {
    //    global $db;
    //    $slc = $db->prepare("SELECT * FROM users");
    //    $slc->execute();
    //    return $slc->fetchAll(PDO::FETCH_ASSOC);
    // }
    public function Insert($post)
    {
        global $db;
        $ins = $db->prepare("INSERT into registrition set

            fullname=:fn,
            nickname=:nm,
            email=:y,
            pasword=:ps
        ");
        $x = $ins->execute([
            'fn'=>$post["z"],
            'nm'=>$post["y"],
            'y'=>$post["x"],
            'ps'=>$post["pass"]
        ]);

        if($x){
            return 1;
        }
        else{
            return 0;
        }
    }


    
}
<?php
include_once('model.php');

    class control extends model
    {
        function __construct()
        {
            session_start();
		
		    model::__construct();

            $Path=$_SERVER['PATH_INFO'];
            switch($Path)
            {
                case '/index':
                include_once('index.php');
                break;

                case '/about':
                include_once('about.php');
                break;

                case '/services':
                include_once('services.php');
                break;

                case '/book':
                $location_arr=$this->select('location');
                $car_arr=$this->select('car_adv');
                include_once('book.php');
                break;

                case '/bookingform':
                    $res=$this->select('user');
                   
                    if(isset($_REQUEST['submit']))
                    {

                        $user_id=$_SESSION['user_id'];
                        $adv_id=$_REQUEST['adv_id'];
                        $name=$_REQUEST['name'];
                        $email=$_REQUEST['email'];                       
                        $phone=$_REQUEST['phone'];
                        $address=$_REQUEST['address'];
                        $state=$_REQUEST['state'];
                        $city=$_REQUEST['city'];
                        
                        date_default_timezone_set('asia/calcutta');
    
                        $arr=array("user_id"=>$user_id,"adv_id"=>$adv_id,"name"=>$name,"email"=>$email,"phone"=>$phone,"address"=>$address,"city"=>$city,"state"=>$state,);
                        $res=$this->insert('booking',$arr);
                        if($res)
                        {
                            echo "
                            <script>
                            alert('booking success....');
                            window.location='index';
                            </script>
                            ";
                        }
                        else
                        {
                            echo "
                            <script>
                            alert('sorry booking not success please try again....');
                            window.location='bookingform';
                            </script>
                            ";
                        }
                    }    
                include_once('bookingform.php');
                break;

                case '/car_adv':
                $category_arr=$this->select('category');
                $location_arr=$this->select('location');
                    if(isset($_REQUEST['submit']))
                    {
                        $owner_name=$_REQUEST['owner_name'];
                        $car_name=$_REQUEST['car_name'];
                        $vehicle_number=$_REQUEST['vehicle_number'];
                        $mobile=$_REQUEST['mobile'];
                        $location_id=$_REQUEST['location_id'];
                        $address=$_REQUEST['address'];
                        $category_id=$_REQUEST['category_id'];

                        $file=$_FILES['file']['name']; // get img name
                        $path='upload/car/'.$file; // path
                        $tmp_file=$_FILES['file']['tmp_name']; // dup file
                        move_uploaded_file($tmp_file,$path  ); // move dup file in path

                        $deposite=$_REQUEST['deposite'];
                        $driver=$_REQUEST['driver'];
                        $charge=$_REQUEST['charge'];
                        $terms_conditions=$_REQUEST['terms_conditions'];                 
        
                        date_default_timezone_set('asia/calcutta');
                        $crated_dt=date('Y-m-d H:i:s');
                        $updated_dt=date('Y-m-d H:i:s');
    
                        $arr=array("owner_name"=>$owner_name,"mobile"=>$mobile,"car_name"=>$car_name,
                        "file"=>$file,"vehicle_number"=>$vehicle_number,"location_id"=>$location_id,
                        "address"=>$address,"category_id"=>$category_id, "deposite"=>$deposite,
                        "driver"=>$driver,"charge"=>$charge,"terms_conditions"=>$terms_conditions,
                        "crated_dt"=>$crated_dt,"updated_dt"=>$updated_dt);
                        $res=$this->insert('car_adv',$arr);
                        if($res)
                        {
                            echo "
                            <script>
                            alert('Thanks for adding your car...');
                            window.location='index';
                            </script>
                            ";
                        }
                        else
                        {
                            echo "not success";
                        }
                    }
                include_once('car_adv.php');
                break;

                case '/contact':
                    if(isset($_REQUEST['submit']))
                    {
                        $name=$_REQUEST['name'];
                        $email=$_REQUEST['email'];
                        $phone=$_REQUEST['phone'];
                        $message=$_REQUEST['message'];                 
    
                        date_default_timezone_set('asia/calcutta');
                        $created_dt=date('Y-m-d H:i:s');
                        $updated_dt=date('Y-m-d H:i:s');
    
                        $arr=array("name"=>$name,"email"=>$email,"phone"=>$phone,"message"=>$message,"created_dt"=>$created_dt,"updated_dt"=>$updated_dt);
                        $res=$this->insert('contact',$arr);
                        if($res)
                        {
                            echo "
                            <script>
                            alert('Thanks for contact us...');
                            window.location='index';
                            </script>
                            ";
                        }
                        else
                        {
                            echo "not success";
                        }
                    }
                include_once('contact.php');
                break;

                case '/signin':
            if(isset($_REQUEST['submit']))
            {
                $username=$_REQUEST['username'];
                $password=md5($_REQUEST['password']); 
                
                $arr=array("username"=>$username,"password"=>$password);
                
                $res=$this->select_where('user',$arr);  
                $chk=$res->num_rows; 
            
                if($chk==1) 
                {
                    $fetch=$res->fetch_object(); 
            
                    $_SESSION['user_id']=$fetch->user_id;
                    $_SESSION['username']=$fetch->username;
                    $_SESSION['name']=$fetch->name;
                    
                    
                    echo "
                    <script>
                    alert('Login Success');
                    window.location='index';
                    </script>
                    ";
                }
                else
                {
                    echo "
                    <script>
                    alert('Login Failed due to wrong creadential !');
                    window.location='signin';
                    </script>
                    ";
                }
            }
            include_once('signin.php');
            break;

                case '/profile':
                $where=array("user_id"=>$_SESSION['user_id']);
                $res=$this->select_where('user',$where);
                $fetch=$res->fetch_object();
                include_once('profile.php');
                break;

                case'/view_booking':
                $book_arr=$this->select('booking');
                include_once('view_booking.php');
                break;

                case '/logout':
                unset($_SESSION['user_id']);
                unset($_SESSION['username']);
                unset($_SESSION['name']);
                echo "
                    <script>
                    alert('Logout Success');
                    window.location='index';
                    </script>
                    ";
                break;

                case '/edit':
                if(isset($_REQUEST['edit_user_id']))
                {
                    $user_id=$_REQUEST['edit_user_id'];
                    $where=array("user_id"=>$user_id);
                    $res=$this->select_where('user',$where);
                    $fetch=$res->fetch_object();
                
                    // get old file for delete
                    $old_img=$fetch->file;
                    
                    if(isset($_REQUEST['save']))
                    {
                        $name=$_REQUEST['name'];
                        $email=$_REQUEST['email'];
                        $address=$_REQUEST['address'];
                        $username=$_REQUEST['username'];
                        $gender=$_REQUEST['gender'];
                                    
                        date_default_timezone_set('asia/calcutta');
                        $updated_dt=date('Y-m-d H:i:s');
                        
                        if($_FILES['file']['size']>0)
                        {
                            $file=$_FILES['file']['name']; // get img name
                            $path='upload/user/'.$file; // path
                            $tmp_file=$_FILES['file']['tmp_name']; // dup file
                            move_uploaded_file($tmp_file,$path); // move dup file in path
                            
                            $arr=array("name"=>$name,"email"=>$email,"address"=>$address,"username"=>$username,"gender"=>$gender,"file"=>$file,"updated_dt"=>$updated_dt);
                            
                            $res=$this->update('user',$arr,$where);
                            if($res)
                            {
                                unlink('upload/user/'.$old_img);
                                echo "
                                <script>
                                alert('Update Success');
                                window.location='profile';
                                </script>
                                ";
                            }
                        }
                        else
                        {
                            $arr=array("name"=>$name,"username"=>$username,"gender"=>$gender,"updated_dt"=>$updated_dt);
                            
                            $res=$this->update('user',$arr,$where);
                            if($res)
                            {
                                echo "
                                <script>
                                alert('Update Success');
                                window.location='profile';
                                </script>
                                ";
                            }
                        }
					}
                }
                include_once('edit_profile.php');
                break;

                case '/register':
                if(isset($_REQUEST['submit']))
                {
                    $name=$_REQUEST['name'];
                    $email=$_REQUEST['email'];
                    $address=$_REQUEST['address'];
                    $gen=$_REQUEST['gen'];
                    $username=$_REQUEST['username'];
                    $password=md5($_REQUEST['password']);                    

                    date_default_timezone_set('asia/calcutta');
				    $created_dt=date('Y-m-d H:i:s');
				    $updated_dt=date('Y-m-d H:i:s');

                    $file=$_FILES['file']['name']; // get img name
                    $path='upload/user/'.$file; // path
                    $tmp_file=$_FILES['file']['tmp_name']; // dup file
                    move_uploaded_file($tmp_file,$path); // move dup file in path

                    $arr=array("name"=>$name,"email"=>$email,"address"=>$address,"Gender"=>$gen,
                        "username"=>$username,"password"=>$password,"file"=>$file,"created_dt"=>$created_dt,"updated_dt"=>$updated_dt);
                    $res=$this->insert('user',$arr);
                    if($res)
                    {
                        echo "
                        <script>
                        alert('Registered Success');
                        window.location='index';
                        </script>
                        ";
                    }
                    else
                    {
                        echo "not success";
                    }
                }
                include_once('register.php');
                break;

                default :
                echo "Page not found";
            
            }
        }
    }
    $obj=new control;
?>
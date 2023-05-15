<?php
class Security extends connectionIndex
{
    private $loginPage = "login.php";
    private $homePage = "pages/almacen/landing.php";
    private $shops = "pages/Tienda/warehouse.php";
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function checkLoggedIn()
    {
        if (!isset($_SESSION["loggedIn"]) || !$_SESSION["loggedIn"]) {
            header("Location: " . $this->loginPage);
        }
    }
    public function close_session()
    {
        if (isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"]) {
            header("Location: " . $this->loginPage);
            unset($_SESSION['loggedIn']);
        }
    }
    public function doLogin()
    {
        if (count($_POST) > 0) {
            $userArray = $this->getUser($_POST["userName"]);
            $user = $userArray['nombre'];
            $_SESSION["loggedIn"] = $this->checkUser($userArray, $_POST["userPassword"]) ? $userArray: false;
            if ($_SESSION["loggedIn"]) {

                $sql = "SELECT almacen_id FROM empleado WHERE nombre ='$user'";
                $result = $this->conn->query($sql);
                //debug********************************************
                $warehouseArray = $result->fetch_assoc();
                $warehouse = $warehouseArray['almacen_id'];
                
                //**************************************************************** */
                if ($warehouse == 1) {
                    header("Location: " . $this->homePage);
                }else {
                    header("Location: " . $this->shops);
                }

                //header("Location: " . $this->homePage);
            } else {
                return "Incorrect User Name or Password";
            }
        } else {
            return null;
        }
    }

    public function getUserData(){
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            return $_SESSION["loggedIn"];
        }
    }

    private function checkUser($userArray, $userPassword)
    {
        if ($userArray) {
            //return $this->checkPassword($user["userPassword"], $userPassword);
            return $this->checkPassword($userArray["securePwd"], $userPassword);
        } else {
            return false;
        }
    }

    private function checkPassword($securePassword, $userPassword)
    {
        return password_verify($userPassword, $securePassword);
        //return ($userPassword === $securePassword);
    }

    private function getUser($userName)
    {
        $sql = "SELECT * FROM empleado WHERE nombre = '$userName'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
}

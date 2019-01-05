<?
namespace console\controllers;

use yii\console\Controller;
use Yii;

class RbacController extends Controller
{
    public function actionRoleadd($role, array $arPerms = [])
    {
        $authManager = Yii::$app->authManager;
        $editRole = $authManager->getRole($role);
        if(!$editRole){
            $editRole = $authManager->createRole($role);
            $authManager->add($editRole);
        }
        if(!empty($arPerms))
        {
            foreach($arPerms as $perm)
            {
                $editPerm = $authManager->getPermission($perm);
                if(!$editPerm){
                    $editPerm = $authManager->createPermission($perm);
                    $authManager->add($editPerm);
                }
                if(!$authManager->hasChild($editRole, $editPerm)){
                    $authManager->addChild($editRole, $editPerm);
                }
            }
        }
        $this->consoleMessage("RBAC role created");
    }

    public function actionRemoverole($role)
    {
        $authManager = Yii::$app->authManager;
        $editRole = $authManager->getRole($role);
        if($editRole){
            $authManager->remove($editRole);
        }
        $this->consoleMessage("RBAC role removed");
    }

    public function actionRemoveall()
    {
        $manager = Yii::$app->authManager;
        $manager->removeAllRoles();
        $manager->removeAllPermissions();
        $manager->removeAllRules();
        $this->consoleMessage("RBAC cleared");
    }

    private function consoleMessage($mess)
    {
        echo $mess."\n";
    }
}

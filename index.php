<?php
//STD config
include 'config/define.php';
include 'config/config.php';

//STD  view
include 'view/view.php';
include 'view/StudentLoginView.php';
include 'view/HomePageView.php';

include 'view/StudentRegisterView.php';
include 'view/StudentRegisterConfirmView.php';

include 'view/StudentRegisterCompleteView.php';

include 'view/StudentListView.php';

include 'view/StudentUpdateView.php';
include 'view/StudentUpdateConfirmView.php';
include 'view/StudentUpdateCompleteView.php';




//STD controller
include 'control/FrontController.php';
include 'control/StudentHomePageController.php';

include 'control/StudentRegisterController.php';
include 'control/StudentBrowseLinkController.php';

include 'control/StudentListController.php';




//STD  MOdel
include 'model/DAO/DAO.php';
include 'model/DAO/AdmDAO.php';
include 'model/DAO/StudentDao.php';

include 'model/entity/Admin.php';
include 'model/entity/Student.php';


session_cache_limiter('none');
session_start();

 $control=new FrontController();
$page= $control->execute();
$page->display();

# sweetalert-laravel
sweetalert for laravel package.beautiful replacement for JavaScript's "Alert"



Tips:I not verify the code.

如果不 好/能 用，你tm来打我啊～～


web page rely:

script src : https://cdn.bootcss.com/sweetalert/1.1.3/sweetalert-dev.min.js

css link : https://cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.css

/**


Example.


use Alert\Alert;


return Alert::Alert('title','message','success');


 */

/**
* 包含title，主题信息，状态的弹窗
* @param string $title
* @param string $message
* @param success/error/info $state
* @return string;
*/

static public function Alert($title,$message,$state){};


/**
* 仅包含标题的alert
* @param string $message
* @return string;
*/

static public function BasisMessage($message = ''){};


/**
* ajax是否确定弹窗
* @param string $title
* @param string $text
* @param string $back_function eg : fuck(x,x,x,x);
* @return string;
*/

static public function ajax($title,$text,$back_function){};

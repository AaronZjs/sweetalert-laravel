<?php namespace Alert;

/*
 * 基于sweetalert
 * sweetalert:http://t4t5.github.io/sweetalert/
 *
 *
 * 基础的 alert 封装
 * sscs <laosql@163.com>
 */

class Alert
{

  /**
   * 包含title，主题信息，状态的弹窗
   * @param string $title
   * @param string $message
   * @param success/error/info $state
   * @return string;
   */
  static public function Alert($title,$message,$state)
  {
    return 'swal("'.$title.'", "'.$message.'", "'.$state.'");';
  }

  /**
   * 仅包含标题的alert
   * @param string $message
   * @return string;
   */
  static public function BasisMessage($message = '')
  {
    return 'swal("'.$message.'");';
  }

  /**
   * ajax是否确定弹窗
   * @param string $title
   * @param string $text
   * @param string $back_function eg : fuck(x,x,x,x);
   * @return string;
   */
  static public function ajax($title,$text,$back_function)
  {

      return 'swal({
        title: "'.$title.'",
        text: "'.$text.'",
        type: "info",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
      },
      function(){
       '.$back_function.'
      });'
  }


}
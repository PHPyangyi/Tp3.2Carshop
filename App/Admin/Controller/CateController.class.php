<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
use Think\Upload;

class CateController extends CommonController{
    public function lst(){
        $cate=D('cate');
        $cates=$cate->catetree();
        $this->assign('cates',$cates);
         $this->display();
    }

    public function add(){

        if(IS_POST)
        {
            $cate=D('Cate');
             $data=array(
                 'name'=>I('post.name'),
                 'type'=>I('post.type'),
                 'pc'=>I('post.pc'),
                 'class'=>I('post.class'),
                 'sort'=>$cate->max('id')+1,
               //  'pic'=>I('post.pic'),
                 'content'=>I('post.content'),
                 'keywords'=>I('post.keywords'),
                 'des'=>I('post.des'),
                 'parentid'=>I('post.parentid'),
             );
             if($_FILES['pic']['tmp_name']!=''){
                 $upload=new Upload();
                 $upload->maxSize= 3145728;
                 $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
                 $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                 $upload->rootPath='./';
                 $info=$upload->uploadOne($_FILES['pic']);
                 if(!$info) {// 上传错误提示错误信息
                     $this->error($upload->getError());
                 }else{// 上传成功
                     $data['pic']=$info['savepath'].$info['savename'];
                 }
             }
            if($cate->create($data))
            {
                if($cate->add())
                {
                    $this->success('新增栏目成功！',U('lst'));
                }else
                {
                    $this->error('新增栏目失败！');
                }
            }else
            {
                $this->error($cate->getError());
            }
           return;
        }
        $cate=D('cate');
        $cates=$cate->catetree();
        $this->assign('cates',$cates);
        $this->display();
    }


    public function update(){
        if(IS_POST){
            $cate=D('Cate');
            $data=array(
                'name'=>I('post.name'),
                'type'=>I('post.type'),
                'pc'=>I('post.pc'),
                'class'=>I('post.class'),
                //  'pic'=>I('post.pic'),
                'content'=>I('post.content'),
                'keywords'=>I('post.keywords'),
                'des'=>I('post.des'),
                'id'=>I('id'),
                //'parentid'=>I('post.parentid'),
            );

            if($_FILES['pic']['tmp_name']!='')
            {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath='./';
                // 上传文件
                $info=$upload->uploadOne($_FILES['pic']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{// 上传成功
                    $data['pic']=$info['savepath'].$info['savename'];
                }
            }

            if($cate->create($data))
            {
                if($cate->save())
                {
                    $this->success('修改栏目成功！',U('lst'));
                }else
                {
                    $this->error('修改栏目失败！');
                }

            }else
            {
                $this->error($cate->getError());
            }

            return;
        }
        $cate=D('Cate');
        $cateid=I('id');
        $cateres=$cate->find($cateid);
        $this->assign('cateres',$cateres);
        $cates=$cate->catetree();
        $this->assign('cates',$cates);
        $this->display();
    }

    public function del(){
       $cate=D('Cate');
        $id=I('id');
        if($cate->delete($id))
        {
            $this->success('成功删除栏目！',U('lst'));
        }else
        {
            $this->error('删除栏目失败！');
        }
    }

    public function bdel(){

         $cate=D('Cate');
         $ids=I('post.ids');
         $ids=implode(',', $ids);  //1,2,3,4
        if($ids ){
                   if($cate->delete($ids))
                {
                    $this->success('批量删除栏目成功！',U('lst'));
                }else
                {
                $this->error('批量删除栏目失败！');
               }
         }else{
            $this->error('未选中任何内容！');
        }
    }

    public function sortcate()
    {
        $cate=D('cate');
       $data=$_POST;
       foreach ($data as $id=>$sort){
           $cate->where("id=$id")->setField('sort',$sort);
       }
        $this->success('成功更新栏目顺序！',U('lst'));
    }

}
<?php
namespace Admin\Controller;

use Think\Controller;
use Think\Page;
use Think\Upload;

class ArticleController extends CommonController{
    public function lst(){
        $article=D('ArticleView');
        $where=1;
        if($kw=I('kw')){
            $where.=' AND title LIKE "%'.$kw.'%"';
        }

        if($search=I('search-sort')){
            $where.=' AND cateid ='.$search;
        }


        $count=$article->where($where)->count();// 查询满足要求的总记录数
        $Page=new Page($count,10);
        $show= $Page->show();// 分页显示输出
        $list = $article->where($where)->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出



        $cate=D('cate');
        $cates=$cate->catetree();
        $this->assign('cates',$cates);

        $this->display();
    }
    public function add(){
        if(IS_POST){
         $article=D('Article');
         $data=array(
             'cateid'=>I('post.cateid'),
             'title'=>I('post.title'),
             'author'=>I('post.author'),
             'keywords'=>I('post.keywords'),
             'des'=>I('post.des'),
             'rem'=>I('post.rem'),
             'atype'=>I('post.atype'),
             'rizu'=>I('post.rizu'),
             'num'=>I('post.num'),
             'content'=>I('post.content'),
             'time'=>time(),
         );
         if($_FILES['pic']['tmp_name']!=''){
             $upload=new Upload();
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

         if($article->create($data)){
             if($article->add())
             {
                 $this->success('新增文章成功！',U('lst'));
             }else
             {
                 $this->error('新增失败！');
             }
         }else{
             $this->error($article->getError());
         }

            return;
        }
        $cate=D('Cate');
        $cates=$cate->catetree();
        $this->assign('cates',$cates);
        $this->display();
    }

    public function updata(){

        if(IS_POST){
            $article=D('Article');
            $data=array(
                   'id'=>I('id'),
                   'cateid'=>I('post.cateid'),
                   'title'=>I('post.title'),
                   'author'=>I('post.author'),
                   'keywords'=>I('post.keywords'),
                   'des'=>I('post.des'),
                   'rem'=>I('post.rem'),
                   'atype'=>I('post.aype'),
                   'rizu'=>I('post.rizu'),
                   'num'=>I('post.num'),
                   'content'=>I('post.content'),
                   'time'=>time(),
            );
            if($_FILES['pic']['tmp_name']!=''){
                $upload=new Upload();
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

            if($article->create($data))
            {
                if($article->save())
                {
                    $this->success('修改文章成功！',U('lst'));
                }else
                {
                    $this->error('修改文章失败！');
                }

            }else
            {
                $this->error($article->getError());
            }

            return;
        }



        $article=D('Article');
        $id=I('id');
        $artres=$article->find($id);
        $this->assign('artres',$artres);
        $cate=D('cate');
        $cates=$cate->catetree();
        $this->assign('cates',$cates);
        $this->display();
    }

    public function del(){

         $id=I('id');
         $article=D('Article');
        if($article->delete($id))
        {
            $this->success('成功删除栏目！',U('lst'));
        }else
        {
            $this->error('删除栏目失败！');
        }
    }

    public function bdel(){
        $article=D('Article');
        $ids=I('post.ids');
        $ids=implode(',', $ids);  //1,2,3,4
        if($article->delete($ids))
        {
            $this->success('成功删除栏目！',U('lst'));
        }else
        {
            $this->error('删除栏目失败！');
        }
    }

}
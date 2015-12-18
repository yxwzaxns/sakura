<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>通信原理精品课程 - 桂林电子科技大学通信工程学院</title>
<link href="/public/css/cssreset-min.css" rel="stylesheet" type="text/css">
<link href="/public/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- 整页容器 -->
<div class="container">
    <div class="banner">
        <!-- <div class="language"><b>中文版</b> | <a href="###" onclick="alert('Sorry…\nEnglish version is under construction.');">Engligh</a></div> -->
    </div>

    <!-- 导航 -->
    <div class="navi">
        <div class="menu">
            <ul>
              <li><a href="/">首页</a></li>
                <?php
                  if(!empty($navs))
                    foreach ($navs as $key => $value) {
                      echo '<li><a href="/welcome/nav_list/'.$value['id'].'">'.$value['navname'].'</a>';
                      if (!empty($value['subnav'])) {
                        echo '<ul>';
                        foreach ($value['subnav'] as $key1 => $value1) {
                          echo '<li><a href="/welcome/page/'.$this->article->getIdFromNid($value1['id']).'" >'.$value1['navname'].'</a></li>';
                        }
                        echo '</ul>';
                      }
                    }
                 ?>

            </ul>
        </div>
    </div>

<div class="main">
<!-- 左边栏 -->
<div class="left">
    <!-- <div class="leftmod">
        <h2>新闻公告<span class="more"><a href="news-list.php">更多&raquo;</a></span></h2>
        <div class="dashline"></div>
        <div class="modcontent">
            <ul>
                <li><a href="news.php?id=9">张艳玲、王勇超荣获多媒体课件评比大赛一、</a></li>
                <li><a href="news.php?id=8">2012通信原理研讨会会议纪实</a></li>
                <li><a href="news.php?id=7">曹丽娜教授受邀参加2012教学研讨会</a></li>
                <li><a href="news.php?id=6">西电专题研讨本科教育教学工作</a></li>
                <li><a href="news.php?id=5">西电2011年度本科教学质量报告公布</a></li>
                <li><a href="news.php?id=4">美国明尼苏达大学报告会</a></li>
                <li><a href="news.php?id=3">我院在TI DSP大奖赛取得优异成绩</a></li>
                <li><a href="news.php?id=2">Anashin教授来校交流访问</a></li>
            </ul>
        </div>
    </div> -->
    <div class="leftmod">
        <!-- 视频 -->
        <h2>课程视频<span class="more"><a href="/welcome/page/37">更多&raquo;</a></span></h2>
        <div class="dashline"></div>
        <div class="modcontent">
            <div class="videoList">
              <?php
                if(!empty($kcsp))
                  foreach ($kcsp as $key => $value) {
                    echo '<a href="'.$value['video_url'].'" target="_blank" title="点击播放 '.$value['title'].'>">'.
                         '<img class="videoThumb" src="'.$value['thumb'].'" alt="教学视频--李建东" width="128" height="96" />'.
                         '<div class="videoIntro">'.
                         '<h3>教学视频--'.$value['author'].'</h3>'.
                         '<span>西安电子科技大学《通信原理》课程视频，主讲：李建东教授。内容：二进制数字调制与解调原理</span>'.
                         '</div>'.
                         '<div class="videoPlayBtn"><img src="/public/images/icon_video_play.png" alt="播放" width="20" /></div>'.
                         '</a>';
                  }
               ?>

            </div>
        </div>
    </div>
    <!-- <div><a href="http://weibo.com/u/2745017835" target="_blank"><img src="./images/weibo.png" width="280" alt="关注通信原理课程的微博"/></a></div> -->
</div>


<!-- 右 -->
<div class="right">
    <div class="rightmod">
        <h2>课程简介<span class="more"><a href="/welcome/page/<?php echo $kcjj['id'] ?>">更多&raquo;</a></span></h2>
        <div class="dashline"></div>
        <div class="modcontent">
          <?PHP
            echo $kcjj['content'];
          ?>
            <!-- <p style="text-justify:inter-ideograph;text-align:left;text-indent:214px"><br /></p>
            <p style="line-height:150%;text-indent:39px">
              <span style="font-family:仿宋_gb2312;font-size:16px">西安电子科技大学通信工程学院开设的《通信原理》课程自从70年代末建立以来，至今已有40余年。该课程是西电首批的一类课程和国家级精品课程。如今，它已是通信、电子信息专业大专、本科和硕士研究生必修的一门重要的的专业基础课，同时也是通信与信息系统专业硕士研究生入学考试课程之一。</span></p><p style="line-height:150%;text-indent:39px"><span style="font-family:仿宋_gb2312;font-size:16px">本课程是以讲授通信的基本概念、基本原理和基本分析方法为主。其中，重点是数字通信，包括数字基带传输、数字频带传输、模拟信号的数字传输、数字信号的最佳接收、差错控制编码、同步技术等。</span></p><p style="line-height:150%;text-indent:32px"><span style="font-family:仿宋_gb2312;font-size:16px">本课程所采用的教材是全国一流的。其中，樊昌信教授主编的《通信原理》一书，从1980年至2006年连续6轮次为全国统编及国家级规划教材；张辉、曹丽娜教授主编的《现代通信原理与技术》被评为“十一五”和“十二五”国家级规划教材；樊昌信 曹丽娜教授主编的《通信原理（第6版）》系列教材被评为国家级精品教材和陕西省优秀教材二等奖，这两套教材已被300余所院校使用<span style="color:#000000">，</span></span><span style="font-family:仿宋_gb2312;color:black;font-size:16px">在国内起到了引领、示范及辐射作用。</span></p><p style="line-height:150%;text-indent:32px"><span style="font-family:仿宋_gb2312;font-size:16px">本课程配置的实验是全国一流的。为了培养学生的工程意识、系统观念，强化学生的动手能力，课程组研制并成批生产了与课程配套的实验系列，已构建8个硬件实验平台，6个软件仿真实验。编写的实验指导书《通信原理及系统实验》为国家“十一五”规划教材。实验箱被全国近四十所院校购置。实验箱及软件仿真实验</span><span style="font-family:仿宋_gb2312;font-size:16px">在国内起到了引领、示范及辐射作用。</span></p><p style="line-height:150%;text-indent:32px"><span style="font-family:仿宋_gb2312;color:black;font-size:16px">本课程的师资是全国一流的。课程经过四十年的建设，培养了一支具有理论深厚、梯队合理、教学水平高、深搏学生爱戴、研发和生产能力强的师资队伍。</span></p><p style="line-height:150%;text-indent:32px"><span style="font-family:仿宋_gb2312;color:black;font-size:16px"></span></p><p style="line-height:150%;text-indent:32px"><span style="font-family:仿宋_gb2312;color:black;font-size:16px"></span><strong><span style="font-family:仿宋_gb2312;font-size:16px"></span></strong></p><p style="text-align:left"><br /></p><p style="line-height:16px"><br /></p><p style="line-height:16px"><img src="http://ste.xidian.edu.cn/txyl/ueditor/dialogs/attachment/fileTypeImages/icon_pdf.gif" /><a href="http://ste.xidian.edu.cn/txyl/files/upload_files/57841353749152.pdf" target="_self" textvalue="2012精品资源共享申报书.pdf"><strong><span style="font-family:楷体, 楷体_gb2312, simkai;color:#ff0000;font-size:24px">2012精品资源共享申报书.pdf</span></strong></a></p><p style="line-height:16px"> </p><p style="line-height:16px"> </p><p style="line-height:16px"> </p><p style="line-height:16px"> </p><p style="line-height:16px">
            </p> -->
        </div>
    </div>
    <div class="rightmod">
        <h2>课程教材<span class="more"><a href="/welcome/page/<?php echo $kcjc['id']; ?>">更多&raquo;</a></span></h2>
        <div class="dashline"></div>
        <div class="modcontent">
          <img src="http://ste.xidian.edu.cn/txyl/files/upload_images/86761377781934.jpg" width="120" height="120" alt="现代通信原理与技术第三版" title="现代通信原理与技术第三版" style="margin:5px 0;border:0;" />
          <img src="http://ste.xidian.edu.cn/txyl/files/upload_images/67381352457643.jpg" width="120" height="120" alt="通信原理学习辅导" title="通信原理学习辅导" style="margin:5px 0;border:0;" />
          <img src="http://ste.xidian.edu.cn/txyl/files/upload_images/85631352457646.jpg" width="120" height="120" alt="通信原理辅导" title="通信原理辅导" style="margin:5px 0;border:0;" />
          <img src="http://ste.xidian.edu.cn/txyl/files/upload_images/59561353213122.jpg" width="120" height="120" alt="简明通信原理" title="简明通信原理" style="margin:5px 0;border:0;" />
          <img src="http://ste.xidian.edu.cn/txyl/files/upload_images/23341353036432.jpg" width="120" height="120" alt="通信原理" title="通信原理" style="margin:5px 0;border:0;" />
          <img src="http://ste.xidian.edu.cn/txyl/files/upload_images/63991377783162.jpg" width="120" height="120" alt="通信原理第7版" title="通信原理第7版" style="margin:5px 0;border:0;" />
          <img src="http://ste.xidian.edu.cn/txyl/files/upload_images/31891377782887.jpg" width="120" height="120" alt="通信原理（第7版）学习辅导与考研指导" title="通信原理（第7版）学习辅导与考研指导" style="margin:5px 0;border:0;" />
          <img src="http://ste.xidian.edu.cn/txyl/files/upload_images/93001352457640.jpg" width="120" height="120" alt="通信原理第6版（精编本）" title="通信原理第6版（精编本）" style="margin:5px 0;border:0;" />
          <img src="http://ste.xidian.edu.cn/txyl/files/upload_images/37321352457650.jpg" width="120" height="120" alt="通信原理（英文版）" title="通信原理（英文版）" style="margin:5px 0;border:0;" />

        </div>
    </div>
    <div class="rightmod">
        <h2>快速链接</h2>
        <div class="dashline"></div>
        <div class="modcontent">
          <?PHP
            $i=0;
            if(!empty($flinks))
              foreach ($flinks as $key => $value) {
                if($i == 4){
                  echo '<br />';
                  $i=0;
                }
                echo '<a href="'.$value['url'].'">'.$value['name'].'</a>&nbsp;&nbsp;';
                $i+=1;
              }
          ?>
        </div>
    </div>
</div>


    </div>

    <div class="footer">
        <div class="copyright">
            <h3>桂林电子科技大学-信息与通信学院 </h3>
            <h3>GUET</h3>
            <span>&copy; 2014</span><a href="/admin/">login</a>
        </div>
    </div>
</div>

</body>
</html>

<?php $url = url()->current(); ?>
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Хянах самбар</a>
  <ul>
    <li 
      <?php if(preg_match("/dashboard/i", $url)){ ?> class="active" <?php }?>>

      <a href="{{ url('admin/dashboard') }}">
        <i class="icon icon-home"></i> 
        <span>Хянах самбар</span>
      </a>
    </li>
{{-- 
    <li>
      
      <a href="{{ url('/laravel-filemanager') }}"></a>
    </li> --}}

    


    <li <?php if(preg_match("/banner/i", $url) || preg_match("/banner/i", $url) ){ ?>class="submenu active" <?php }?> class="submenu">
      <a href="#">
      <i class="icon icon-file"></i> 
      <span>Баннер</span> 
      </a>
      <ul>
        <li <?php if(preg_match("/add-banner/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/add-banner') }}">Баннер нэмэх</a></li>
        <li <?php if(preg_match("/view-posts/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/view-banners') }}">Бүгд</a></li>
      </ul>
    </li>

    
   

    <li <?php if(preg_match("/info/i", $url) || preg_match("/info/i", $url) ){ ?>class="submenu active" <?php }?> class="submenu">
      <a href="#">
      <i class="icon icon-file"></i> 
      <span>Танилцуулга</span> 
      </a>
      <ul>
        <li <?php if(preg_match("/add-info/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/add-info') }}">Танилцуулга нэмэх</a></li>
        <li <?php if(preg_match("/view-infos/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/view-infos') }}">Бүх танилцуулга</a></li>
    
      </ul>
    </li>




   


     <!--<li 
     <?php 
     //if(preg_match("/product/i", $url) || preg_match("/product/i", $url) ){ 
       ?>
      class="submenu active" <?php //}?> 
     class="submenu">
      <a href="#">
      <i class="icon icon-file"></i> 
      <span>Бүтээгдэхүүн</span> 
      </a>
      <ul>
        <li <?php //if(preg_match("/add-product/i", $url)){ ?>class="active" <?php //}?>><a href="{{ url('admin/add-product') }}">Бүтээгдэхүүн нэмэх</a></li>
        <li <?php //if(preg_match("/view-posts/i", $url)){ ?>class="active" <?php //}?>><a href="{{ url('admin/view-products') }}">Бүгд</a></li>
      </ul>
    </li> -->


 <li <?php if(preg_match("/categor/i", $url) || preg_match("/categor/i", $url) ){ ?>class="submenu active" <?php }?> class="submenu">
      <a href="#">
      <i class="icon icon-file"></i> 
      <span>Мэдээ ангилал</span> 
      </a>
      <ul>
        <li <?php if(preg_match("/add-category/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/add-category') }}">Ангилал нэмэх</a></li>
        <li <?php if(preg_match("/view-categories/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/view-categories') }}">Бүх Ангилал</a></li>
      </ul>
    </li>



     <li <?php if(preg_match("/post/i", $url) || preg_match("/post/i", $url) ){ ?>class="submenu active" <?php }?> class="submenu">
      <a href="#">
      <i class="icon icon-file"></i> 
      <span>Мэдээ</span> 
      </a>
      <ul>
        <li <?php if(preg_match("/add-post/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/add-post') }}">Мэдээ нэмэх</a></li>
        <li <?php if(preg_match("/view-posts/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/view-posts') }}">Бүх нийтлэл</a></li>
      </ul>
    </li>

    <li <?php if(preg_match("/page/i", $url)){ ?>class="submenu active" <?php }?> class="submenu"> 
      <a href="#"><i class="icon icon-file"></i> 
        <span>Хуудас</span>
      </a>
      <ul>
          <li <?php if(preg_match("/add-page/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/add-page') }}">Хуудас нэмэх</a></li>
          <li <?php if(preg_match("/view-pages/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/view-pages') }}">Бүх хуудас</a></li>
      </ul>
    </li>


    <li <?php if(preg_match("/menu/i", $url) || preg_match("/menu/i", $url) ){ ?>class="submenu active" <?php }?> class="submenu">
      <a href="#">
      <i class="icon icon-file"></i> 
      <span>Цэс</span> 
      </a>
      <ul>
        <li <?php if(preg_match("/add-menu/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/add-menu') }}">Цэс нэмэх</a></li>
        <li <?php if(preg_match("/view-menus/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/view-menus') }}">Бүх цэс</a></li>
      </ul>
    </li>



    <!--
    <li <?php if(preg_match("/hamt/i", $url) || preg_match("/hamt/i", $url) ){ ?>class="submenu active" <?php }?> class="submenu">
      <a href="#">
      <i class="icon icon-file"></i> 
      <span>Хамтрагч байгууллагууд</span> 
      </a>
      <ul>
        <li <?php if(preg_match("/add-hamt/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/add-hamt') }}">Нэмэх</a></li>
        <li <?php if(preg_match("/view-hamts/i", $url)){ ?>class="active" <?php }?>><a href="{{ url('admin/view-hamts') }}">Бүгд</a></li>
      </ul>
    </li>
  -->


    <li  <?php if(preg_match("/frontend/i", $url)){ ?>class="active" <?php }?>> 
      <a href="{{ url('admin/frontend-setup') }}"><i class="icon icon-th-list"></i>
       <span>Тохиргоо</span> 
       {{-- <span class="label label-important">3</span> --}}
      </a>
    </li>

  </ul>
</div>
<!--sidebar-menu-->
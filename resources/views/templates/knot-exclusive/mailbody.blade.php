@extends('layouts.app')

@section('content')
	
	<div class="main-content">
          <div class="mail_holder">           
            <div class="mail_menu_block no_padding col-md-4 col-sm-4 col-xs-12 col-lg-3">
              <div class="mail_menu">
                <div class="compose_block">
                  <a href="#" class="btn btn-info btn-block"><i class="ti-pencil-alt"></i>compose</a>
                </div>
                <ul class="list-unstyled menu_list">
                  <li><a href="{!! url('templates/knot-exclusive/mailbox') !!}"><i class="ti-package"></i> Inbox</a></li>
                  <li><a href="#"><i class="ti-truck"></i>Sent</a></li>
                  <li><a href="#"><i class="ti-briefcase"></i>Drafts</a></li>
                  <li><a href="#"><i class="ti-trash"></i>Trash</a></li>
                  <li><a href="#"><i class="ti-star"></i>Starred</a></li>
                  <li><a href="#"><i class="ti-hand-open"></i> Spam</a></li>
                  <li><a href="#"><i class="ti-bookmark-alt"></i> Archived</a></li>
                </ul>
                <ul class="list-unstyled recent_activity">
                  <li><div class="heading">People Online<span class="pull-right"><a href="#"><i class="ti-reload"></i></a></span></div></li>
                  <li>
                    <a href="#">
                      <div class="img_holder">
                        <img src="{!! url('assets/images/avatar/four.png') !!}" alt="">
                      </div>
                      <h2>Tupakula vijay</h2>
                      <p>Classmate</p>
                    </a>
                    <a href="#">
                      <div class="img_holder">
                        <img src="{!! url('assets/images/avatar/five.png') !!}" alt="">
                      </div>
                      <h2>Lakshman kumar</h2>
                      <p>Professor</p>
                    </a>
                    <a href="#">
                      <div class="img_holder">
                        <img src="{!! url('assets/images/avatar/six.png') !!}" alt="">
                      </div>
                      <h2>Venkatesh chitturi</h2>
                      <p>Mla</p>
                    </a>
                  </li>                 
                </ul>               
              </div>
              <!-- mail-menu -->
            </div>
            <!-- col-md-2 -->
            <div class="mail_body">               
            <div class="col-md-8 col-lg-9 col-sm-8 col-xs-12 no_padding mail_brief_holder" tabindex="3" style="overflow: hidden; outline: none;">
                <div class="heading_block">
                  <h1>Project discussion <span>today 12.30am</span></h1>
                  <div class="btn-group pull-right action_buttons" role="group" aria-label="...">
                    <button type="button" class="btn btn-default"><i class="ion-reply"></i></button>
                    <button type="button" class="btn btn-default"><i class="ion-reply-all"></i></button>
                    <button type="button" class="btn btn-default"><i class="ion-android-arrow-forward"></i></button>
                    <button type="button" class="btn btn-default"><i class="ion-android-attach"></i></button>
                    <button type="button" class="btn btn-default"><i class="ion-ios-trash"></i></button>
                  </div>
                </div>
                <!-- heading_block -->
                <div class="mail_brief_body">
                  <img src="{!! url('assets/images/avatar/one.png" alt="user" class="user') !!}-image">
                  <h4>lets do it today!</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus maxime odio facilis, corporis eum impedit ea,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis est, mollitia in! Reprehenderit voluptatem, porro distinctio iste in eos quam dicta sunt at fuga! Facilis inventore laboriosam perferendis placeat, delectus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quibusdam ad, numquam. Cum dolore facilis consequuntur vero sit doloribus, eaque. Unde aperiam harum neque iste minus excepturi sed vel alias?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum ipsum corporis, unde sit? Modi dignissimos reprehenderit ab molestiae molestias atque asperiores maiores quod, delectus rerum, et doloremque exercitationem aspernatur quia!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium similique quia soluta aliquam explicabo vero fuga voluptatibus deleniti ipsum, odit quidem minus atque a enim, repellat placeat ea voluptates saepe.Lorem ipsum dolor sit amet, consectetur adipisicing elit. At quo nisi, officiis hic ducimus itaque, adipisci magni beatae cupiditate quasi asperiores soluta velit dolor esse, aut reiciendis eum libero quos!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad iusto non eum sed nam. Recusandae, beatae, itaque et architecto, consectetur praesentium hic sed veritatis voluptatibus laudantium facilis minima commodi nam!
                  </p>
                  <div class="attachments">
                    <div class="image-hold">
                      <img src="{!! url('assets/images/post1.jpg') !!}" alt="">
                      <a href="#"><i class="ion ion-ios-download-outline"></i></a>
                    </div>
                    <!-- image-hold -->
                    <div class="image-hold">
                      <img src="{!! url('assets/images/post2.jpg') !!}" alt="">
                      <a href="#"><i class="ion ion-ios-download-outline"></i></a>
                    </div>
                    <!-- image-hold -->
                    <div class="image-hold">
                      <img src="{!! url('assets/images/post3.jpg') !!}" alt="">
                      <a href="#"><i class="ion ion-ios-download-outline"></i></a>
                    </div>
                    <!-- image-hold -->
                    <div class="download-all">
                      <a href="#"><i class="ion-code-download"></i></a>
                    </div>
                  </div>
                  <!-- attachments -->
                  <textarea class="form-control" rows="4" placeholder="enter message here.."></textarea>
                  <a href="#" class="btn btn-primary reply">Reply message</a>
                </div>
                <!-- mail_brief_body -->
              </div>             
            </div>
            <!-- mail-body -->                      
          </div>
          <!-- mail-holder -->      
        </div>

@endsection

@section('scripts')

@endsection
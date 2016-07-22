@extends('layouts.app')

@section('content')
<div class="main-content">
          <div class="mail_holder">
            <div class="mail_menu_block no_padding col-md-4 col-sm-6 col-xs-12 col-lg-3">
              <div class="mail_menu">
                <div class="compose_block">
                  <a href="#" class="btn btn-info btn-block"><i class="ti-pencil-alt"></i>compose</a>
                </div>
                <ul class="list-unstyled menu_list">
                  <li><a href="#"><i class="ti-package"></i> Inbox</a></li>
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
                      <h2>Ajay kumar</h2>
                      <p>Professor</p>
                    </a>
                    <a href="#">
                      <div class="img_holder">
                        <img src="{!! url('assets/images/avatar/six.png') !!}" alt="">
                      </div>
                      <h2>Kevin</h2>
                      <p>Mla</p>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- mail-menu -->
            </div>
            <!-- col-md-2 -->
            <div class="mail_body">
              <div class="mail_list_block col-md-8 col-sm-6 no_padding col-xs-12 col-lg-9">
                <div class="mail_list">
                  <div class="search_bar_block">
                    <div class="search_icon_block">
                      <input type="text" class="form-control" id="inputSuccess3" placeholder="search for mails">
                      <span class="ion-search form-control-feedback" aria-hidden="true"></span>
                    </div>
                  </div>
                  <ul class="list-unstyled mails_holder">
                    <li>
                    <a href="{!! url('templates/knot-exclusive/mailbody') !!}">
                        <div class="message_list_block">
                          <div class="left">
                            <div class="avatar_holder">
                              <img src="{!! url('assets/images/avatar/two.png') !!}" alt="">
                            </div>
                          </div>
                          <div class="right">
                            <span class="name">Praveen kaligatla</span>
                            <div class="pull-right right_details">
                              <ul class="list-unstyled list-inline">
                                <li>12:30</li>
                                <li><i class="ion ion-record flatRedc status"></i></li>
                                <li><i class="ion-android-attach"></i></li>
                              </ul>
                            </div>
                            <h4>Research have been going on the project will report the results asap in a few days.</h4>
                          </div>
                          <!-- right -->
                        </div>
                      </a>
                      <a href="{!! url('templates/knot-exclusive/mailbody') !!}">
                        <div class="message_list_block">
                          <div class="left">
                            <div class="avatar_holder">
                              <img src="{!! url('assets/images/avatar/one.png') !!}" alt="">
                            </div>
                          </div>
                          <div class="right">
                            <span class="name">Tupakula Vijay</span>
                            <div class="pull-right right_details">
                              <ul class="list-unstyled list-inline">
                                <li>12:30</li>
                                <li><i class="ion ion-record flatGreenc status"></i></li>
                                <li><i class="ion-android-attach"></i></li>
                              </ul>
                            </div>
                            <h4>Searching for the best cafe around ?? come to meet at given location.</h4>
                          </div>
                          <!-- right -->
                        </div>
                      </a>
                      <a href="{!! url('templates/knot-exclusive/mailbody') !!}">
                        <div class="message_list_block unread">
                          <div class="left">
                            <div class="avatar_holder">
                              <img src="{!! url('assets/images/avatar/three.png') !!}" alt="">
                            </div>
                          </div>
                          <div class="right">
                            <span class="name">Anusha</span>
                            <div class="pull-right right_details">
                              <ul class="list-unstyled list-inline">
                                <li>12:30</li>
                                <li><i class="ion ion-record flatGreenc status"></i></li>
                                <li><i class="ion-android-attach"></i></li>
                              </ul>
                            </div>
                            <h4>should release the project in the given date work hard.come on guys lets do it</h4>
                          </div>
                          <!-- right -->
                        </div>
                      </a>
                      <a href="{!! url('templates/knot-exclusive/mailbody') !!}">
                        <div class="message_list_block">
                          <div class="left">
                            <div class="avatar_holder">
                              <img src="{!! url('assets/images/avatar/four.png') !!}" alt="">
                            </div>
                          </div>
                          <div class="right">
                            <span class="name">Kevin</span>
                            <div class="pull-right right_details">
                              <ul class="list-unstyled list-inline">
                                <li>12:30</li>
                                <li><i class="ion ion-record flatGreyc status"></i></li>
                                <li><i class="ion-android-attach"></i></li>
                              </ul>
                            </div>
                            <h4>Got selected as ias officer happy to tell ya . will give party soon</h4>
                          </div>
                          <!-- right -->
                        </div>
                      </a>
                      <a href="{!! url('templates/knot-exclusive/mailbody') !!}">
                        <div class="message_list_block">
                          <div class="left">
                            <div class="avatar_holder">
                              <img src="{!! url('assets/images/avatar/five.png') !!}" alt="">
                            </div>
                          </div>
                          <div class="right">
                            <span class="name">Ajay Kumar</span>
                            <div class="pull-right right_details">
                              <ul class="list-unstyled list-inline">
                                <li>12:30</li>
                                <li><i class="ion ion-record flatGreyc status"></i></li>
                                <li><i class="ion-android-attach"></i></li>
                              </ul>
                            </div>
                            <h4>hell yeah i got no fear lets rock the world :P </h4>
                          </div>
                          <!-- right -->
                        </div>
                      </a>
                      <a href="{!! url('templates/knot-exclusive/mailbody') !!}">
                        <div class="message_list_block">
                          <div class="left">
                            <div class="avatar_holder">
                              <img src="{!! url('assets/images/avatar/six.png') !!}" alt="">
                            </div>
                          </div>
                          <div class="right">
                            <span class="name">Paris hilton</span>
                            <div class="pull-right right_details">
                              <ul class="list-unstyled list-inline">
                                <li>12:30</li>
                                <li><i class="ion ion-record flatGreyc status"></i></li>
                                <li><i class="ion-android-attach"></i></li>
                              </ul>
                            </div>
                            <h4>Today recharge with free charge Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum cumque esse repellendus, ratione doloribus tempore. Sit expedita est, dignissimos, amet in error placeat voluptates tempore saepe dolores quas nobis. Optio!</h4>
                          </div>
                          <!-- right -->
                        </div>
                      </a>
                      <a href="{!! url('templates/knot-exclusive/mailbody') !!}">
                        <div class="message_list_block">
                          <div class="left">
                            <div class="avatar_holder">
                              <img src="{!! url('assets/images/avatar/nine.png') !!}" alt="">
                            </div>
                          </div>
                          <div class="right">
                            <span class="name">Paul walker</span>
                            <div class="pull-right right_details">
                              <ul class="list-unstyled list-inline">
                                <li>12:30</li>
                                <li><i class="ion ion-record flatGreyc status"></i></li>
                                <li><i class="ion-android-attach"></i></li>
                              </ul>
                            </div>
                            <h4>Today recharge with free charge Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum cumque esse repellendus, ratione doloribus tempore. Sit expedita est, dignissimos, amet in error placeat voluptates tempore saepe dolores quas nobis. Optio!</h4>
                          </div>
                          <!-- right -->
                        </div>
                      </a>
                      <a href="{!! url('templates/knot-exclusive/mailbody') !!}">
                        <div class="message_list_block">
                          <div class="left">
                            <div class="avatar_holder">
                              <img src="{!! url('assets/images/avatar/seven.png') !!}" alt="">
                            </div>
                          </div>
                          <div class="right">
                            <span class="name">Paul walker</span>
                            <div class="pull-right right_details">
                              <ul class="list-unstyled list-inline">
                                <li>12:30</li>
                                <li><i class="ion ion-record flatGreenc status"></i></li>
                                <li><i class="ion-android-attach"></i></li>
                              </ul>
                            </div>
                            <h4>Today recharge with free charge Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum cumque esse repellendus, ratione doloribus tempore. Sit expedita est, dignissimos, amet in error placeat voluptates tempore saepe dolores quas nobis. Optio!</h4>
                          </div>
                          <!-- right -->
                        </div>
                      </a>
                      <a href="{!! url('templates/knot-exclusive/mailbody') !!}">
                        <div class="message_list_block">
                          <div class="left">
                            <div class="avatar_holder">
                              <img src="{!! url('assets/images/avatar/eight.png') !!}" alt="">
                            </div>
                          </div>
                          <div class="right">
                            <span class="name">Paul walker</span>
                            <div class="pull-right right_details">
                              <ul class="list-unstyled list-inline">
                                <li>12:30</li>
                                <li><i class="ion ion-record flatGreyc status"></i></li>
                                <li><i class="ion-android-attach"></i></li>
                              </ul>
                            </div>
                            <h4>Today recharge with free charge Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum cumque esse repellendus, ratione doloribus tempore. Sit expedita est, dignissimos, amet in error placeat voluptates tempore saepe dolores quas nobis. Optio!</h4>
                          </div>
                          <!-- right -->
                        </div>
                      </a>
                      <a href="{!! url('templates/knot-exclusive/mailbody') !!}">
                        <div class="message_list_block">
                          <div class="left">
                            <div class="avatar_holder">
                              <img src="{!! url('assets/images/avatar/nine.png') !!}" alt="">
                            </div>
                          </div>
                          <div class="right">
                            <span class="name">Paul walker</span>
                            <div class="pull-right right_details">
                              <ul class="list-unstyled list-inline">
                                <li>12:30</li>
                                <li><i class="ion ion-record flatGreenc status"></i></li>
                                <li><i class="ion-android-attach"></i></li>
                              </ul>
                            </div>
                            <h4>Today recharge with free charge Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum cumque esse repellendus, ratione doloribus tempore. Sit expedita est, dignissimos, amet in error placeat voluptates tempore saepe dolores quas nobis. Optio!</h4>
                          </div>
                          <!-- right -->
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- mail-list -->
              </div>
              <!-- col-md-6 -->
            </div>
            <!-- mail-body -->
          </div>
          <!-- mail-holder -->
        </div>
@endsection

@section('scripts')

@endsection

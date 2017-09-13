@extends('dashboard')
@section('content')
<div class="show">
                                    <div id="user-profile-3" class="user-profile row">
                                        <div class="col-sm-offset-1 col-sm-10">
                                            <div class="well well-sm">
                                                <!-- -
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        &nbsp; -->
                                                <div class="inline middle blue bigger-110"> Your profile is 70% complete </div>

                                                &nbsp; &nbsp; &nbsp;
                                                <div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active">
                                                    <div class="progress-bar progress-bar-success" style="width:70%"></div>
                                                </div>
                                            </div><!-- /.well -->

                                            <div class="space"></div>

                                            <form class="form-horizontal" action="/dashboard/users/update" method="POST">
                                                <div class="tabbable">
                                                    <ul class="nav nav-tabs padding-16">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#edit-basic">
                                                                <i class="green ace-icon fa fa-pencil-square-o bigger-125"></i>
                                                                Basic Info
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a data-toggle="tab" href="#edit-settings">
                                                                <i class="purple ace-icon fa fa-cog bigger-125"></i>
                                                                Settings
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a data-toggle="tab" href="#edit-password">
                                                                <i class="blue ace-icon fa fa-key bigger-125"></i>
                                                                Password
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content profile-edit-tab-content">
                                                        <div id="edit-basic" class="tab-pane in active">
                                                            <h4 class="header blue bolder smaller">General</h4>

                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-4">
                                                                <h4> Upload profile picture</h4>
                                                                    <input type="file" />
                                                                </div>

                                                        
                                                                <div class="vspace-12-sm"></div>

                                                                <div class="col-xs-12 col-sm-8">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-4 control-label no-padding-right" for="form-field-email">Email</label>

                                                                        <div class="col-sm-8">
                                                                            <input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="Email"  value="{{strtolower(Auth::user()->checkStatus()->email)}} "/>
                                                                        </div>
                                                                    </div>

                                                                    <div class="space-4"></div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-4 control-label no-padding-right" for="form-field-first">Full Name</label>

                                                                        <div class="col-sm-8">
                                                                            <input class="input-small" type="text" id="form-field-first" placeholder="First Name"  value="{{strtoupper(Auth::user()->checkStatus()->first_name)}} "/>
                                                                            <input class="input-small" type="text" id="form-field-last" placeholder="Last Name"  value="{{strtoupper(Auth::user()->checkStatus()->last_name)}} "/>
                                                                            <input class="input-small" type="text" id="form-field-last" placeholder="Middle Name"   value="{{strtoupper(Auth::user()->checkStatus()->middle_name)}} "/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <hr />
                                                            
                                                            <div class="space-4"></div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label no-padding-right">Gender</label>

                                                                <div class="col-sm-9">
                                                                    <label class="inline">
                                                                        <input name="form-field-radio" type="radio" class="ace" />
                                                                        <span class="lbl middle"> Male</span>
                                                                    </label>

                                                                    &nbsp; &nbsp; &nbsp;
                                                                    <label class="inline">
                                                                        <input name="form-field-radio" type="radio" class="ace" />
                                                                        <span class="lbl middle"> Female</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                           

                                                            <div class="space"></div>
                                                            <h4 class="header blue bolder smaller">Contact</h4>

                                                           

                                                            <div class="space-4"></div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-website">State</label>

                                                                <div class="col-sm-9">
                                                                    <select>
                                                                        <option>Abia</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                                <div class="space-4"></div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Address</label>

                                                                <div class="col-sm-9">
                                                                    <textarea id="form-field-comment">{{strtoupper(Auth::user()->checkStatus()->address)}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="space-4"></div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

                                                                <div class="col-sm-9">
                                                                    <span class="input-icon input-icon-right">
                                                                        <input class="input-medium input-mask-phone" type="text" id="form-field-phone" value="{{strtoupper(Auth::user()->checkStatus()->phone_no)}}"/>
                                                                        <i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="space"></div>
                                                            <h4 class="header blue bolder smaller">Social</h4>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>

                                                                <div class="col-sm-9">
                                                                    <span class="input-icon">
                                                                        <input type="text" value="facebook_alexdoe" id="form-field-facebook" />
                                                                        <i class="ace-icon fa fa-facebook blue"></i>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="space-4"></div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>

                                                                <div class="col-sm-9">
                                                                    <span class="input-icon">
                                                                        <input type="text" value="twitter_alexdoe" id="form-field-twitter" />
                                                                        <i class="ace-icon fa fa-twitter light-blue"></i>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="space-4"></div>

                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>

                                                                <div class="col-sm-9">
                                                                    <span class="input-icon">
                                                                        <input type="text" value="google_alexdoe" id="form-field-gplus" />
                                                                        <i class="ace-icon fa fa-google-plus red"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="edit-settings" class="tab-pane">
                                                            <div class="space-10"></div>

                                                            <div>
                                                                <label class="inline">
                                                                    <input type="checkbox" name="form-field-checkbox" class="ace" />
                                                                    <span class="lbl"> Make my profile public</span>
                                                                </label>
                                                            </div>

                                                            <div class="space-8"></div>

                                                            <div>
                                                                <label class="inline">
                                                                    <input type="checkbox" name="form-field-checkbox" class="ace" />
                                                                    <span class="lbl"> Email me new updates</span>
                                                                </label>
                                                            </div>

                                                            <div class="space-8"></div>

                                                            <div>
                                                                <label>
                                                                    <input type="checkbox" name="form-field-checkbox" class="ace" />
                                                                    <span class="lbl"> Keep a history of my conversations</span>
                                                                </label>

                                                                <label>
                                                                    <span class="space-2 block"></span>

                                                                    for
                                                                    <input type="text" class="input-mini" maxlength="3" />
                                                                    days
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div id="edit-password" class="tab-pane">
                                                            <div class="space-10"></div>

                                                            <div class="form-group{{ $errors->has('oldpassword') ? ' has-error' : '' }}">
                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">Old Password</label>

                                                                <div class="col-sm-9">
                                                                    <input type="password" id="form-field-pass1" name="oldpassword" value="" required autofocus/>
                                                                    @if ($errors->has('oldpassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldpassword') }}</strong>
                                    </span>
                                @endif
                                                                </div>
                                                            </div>

                                                            <div class="space-4"></div>
                                                                
                                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">NewPassword</label>

                                                                <div class="col-sm-9">
                                                                    <input type="password" id="form-field-pass1" name="password" value="" required autofocus/>
                                                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                                                </div>
                                                            </div>
                                                                    <div class="space-4"></div>
                                                           
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1"> Password Again</label>

                                                                <div class="col-sm-9">
                                                                    <input type="password" id="form-field-pass1" name="password_confirmation" value="" required autofocus/>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="clearfix form-actions">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button class="btn btn-info" id="save_me" type="button">
                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                            Save
                                                        </button>

                                                        &nbsp; &nbsp;
                                                        <button class="btn" type="reset">
                                                            <i class="ace-icon fa fa-undo bigger-110"></i>
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div><!-- /.span -->
                                    </div><!-- /.user-profile -->
                                </div>

@endsection

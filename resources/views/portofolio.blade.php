<!DOCTYPE html>
<html>
<head>
    <title>Vidyanusa | Portofolio</title>
        <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link href="{{asset('css/semantic.css') }}" rel="stylesheet">
    <link href="{{asset('css/main.css') }}" rel="stylesheet">
    <link href="{{asset('css/animate.css') }}" rel="stylesheet">

    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/semantic.min.js')}}"></script>
    <script src="{{asset('/js/nicescroll.min.js')}}"></script>

    <script src="{{asset('/js/main.js')}}"></script>
    <script src="{{asset('/js/graph.js')}}"></script>
</head>

<body>

    <div class="pusher">
        <div class="ui fluid container">
            <div class="ui two column grid">
                <div class="side menu" id="sideMenu">
                    <div align="center" class="profile">
                        <br>
                        <a href=""><img src="{{asset('/img/fotoProfil.jpg')}}" alt="Teuku Rasya" class="ui circular image" width="150px"></a>
                        <div class="ui black header">Teuku Rasya</div>
                        <div class="ui black">@teukurasya</div>
                        <div class="ui black">SMPN 19 Bandung</div>
                        <div class="ui divider"></div>
                    </div>
                    <div class="ui fluid vertical menu" id="verticalMenu">
                        <a class="item"><i class="icon">5</i> <span>Beribadah</span></a>
                        <a class="item"><i class="icon">7</i> <span>Berdoa</span></a>
                        <a class="item"><i class="icon">5</i> <span>Kebersihan</span></a>
                        <a class="item"><i class="icon">8</i> <span>Kemanusiaan</span></a>
                        <a class="item"><i class="icon">6</i> <span>Eksperimen Lapangan</span></a>
                    </div>
                </div>
                <div class="sixteen wide column" id="content">

                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=573374859408331";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>

                        <button class="ui share button" id="buttonShare" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                          <i class="share icon"></i>
                          <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://tadj3.lskk.ee.itb.ac.id" style="color : black">Share</a>
                        </button>

                    <div class="ui container">
                        <div id="context2">
                            <div class="ui secondary menu">
                              <a class="item active" data-tab="beribadah">Beribadah</a>
                              <a class="item" data-tab="berdoa">Berdoa</a>
                              <a class="item" data-tab="kebersihan">Kebersihan</a>
                              <a class="item" data-tab="kemanusiaan">Kemanusiaan</a>
                              <a class="item" data-tab="eksperimenLapangan">Eksperimen Lapangan</a>
                            </div>
                            <div class="ui tab segment active" data-tab="beribadah">
                              <div class="ui top attached tabular menu">
                                <div class="ui three column stackable grid ui form">
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakSolat1.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakSolat2.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                   <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakSolat3.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakSolat4.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakSolat5.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="ui tab segment" data-tab="berdoa">
                              <div class="ui top attached tabular menu">
                                <div class="ui three column stackable grid ui form">
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakBerdoa1.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakBerdoa2.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                   <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakBerdoa4.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakBerdoa3.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakBerdoa5.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakBerdoa6.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakBerdoa7.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="ui tab segment" data-tab="kebersihan">
                              <div class="ui top attached tabular menu">
                                <div class="ui three column stackable grid ui form">
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKebersihan1.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKebersihan2.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                   <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKebersihan3.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKebersihan4.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKebersihan5.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="ui tab segment" data-tab="kemanusiaan">
                              <div class="ui top attached tabular menu">
                                <div class="ui three column stackable grid ui form">
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKemanusiaan1.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKemanusiaan2.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                   <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKemanusiaan3.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKemanusiaan4.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKemanusiaan5.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKemanusiaan6.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKemanusiaan7.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakKemanusiaan8.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="ui tab segment" data-tab="eksperimenLapangan">
                              <div class="ui top attached tabular menu">
                                <div class="ui three column stackable grid ui form">
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakEksperimenLingkungan1.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakEksperimenLingkungan2.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                   <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakEksperimenLingkungan3.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakEksperimenLingkungan4.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakEksperimenLingkungan5.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="ui card">
                                            <div class="content">
                                                <div class="right floated meta">14h</div>
                                                <img class="ui avatar image" src="{{asset('/img/fotoProfil.jpg')}}"> teukurasya
                                            </div>
                                            <div class="image">
                                                <img src="{{asset('/img/anakEksperimenLingkungan6.jpg')}}">
                                            </div>
                                            <div class="content">
                                                <span class="right floated">
                                              <i class="heart outline like icon"></i>
                                              17 likes
                                            </span>
                                                <i class="comment icon"></i> 3 comments
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="evaluated code" data-type="javascript">
                                <script type="text/javascript">
                                  $('#context2 .menu .item')
                                    .tab({
                                      context: $('#context2')
                                    })
                                  ;
                                </script>
                            </div>
                          </div>
                    </div>
                    <div align="center">
                        Vidyanusa
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>

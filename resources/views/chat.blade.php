@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card purple lighten-4 chat-room">
            <div class="card-body">
                <!-- Grid row -->
                <div class="row justify-content-md-center px-2">
                    <!-- Grid column -->
                    <div class="col-md-6 col-xl-8 pr-md-4 px-lg-auto px-0">
                        <div class="chat-message">
                            <li class="list-group-item active">Chat Room <small class="badge badge-pil badge-danger">@{{ numberOfUsers }}</small></li>
                            <ul class="list-unstyled" v-chat-scroll>
                                <message
                                 v-for="value,index in chat.message"
                                 :key="value.index"
                                 :color=  chat.color[index]
                                 :user = chat.user[index]
                                 :time = chat.time[index]
                                >
                                   @{{ value }}
                                </message>
                            </ul>
                            <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                        </div>
{{--                    <input placeholder="Type your message here..." type="text" id="inputPlaceholderEx" class="form-control" v-model="message" @keyup.enter="send">--}}
                        <div class="form-group basic-textarea">
                              <textarea class="form-control pl-2 my-0" id="exampleFormControlTextarea2" rows="3" placeholder="Type your message here..."
                              v-model="message" @keyup.enter="send"></textarea>
                        </div>

                        <a href='' class="btn btn-danger btn-sm float-left" @click.prevent='deleteSession'>Dekete</a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </div>
    </div>
@endsection

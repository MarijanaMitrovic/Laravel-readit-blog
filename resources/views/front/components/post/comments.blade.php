<br/>
<br/>



                        <ul class="comment-list" >
                            @foreach($comments as $c)
                            <li class="comment" id="comment{{$c->id}}">
                                <div class="vcard bio">

                                </div>
                                <div class="comment-body">
                                    <h3>{{$c->name.' '.$c->surname}}</h3>
                                    <div class="meta mb-3">{{ date("F j, Y", strtotime($c->created_at)) }}</div>
                                    <p id="comment{{$c->id}}"> {{$c->content}}</p>
                                    @if(session('user'))
                                    @if(session()->get('user')->role_name == 'admin')
                                    <p id="rep"><a href="#komentar" data-id="{{$c->id}}" class="reply"  onclick="show({{$c->id}})">Reply</a></p>
                                        @endif

                                    @if(session()->get('user')->id == $c->user_id || session()->get('user')->role_name == 'admin')
                                        <p><a href="{{route("deleteCom",['id'=>$c->id])}}"  class="reply" >Delete</a></p>
                                        @endif
                                        @if(session()->get('user')->id == $c->user_id)
                                            <p id="rep"><a href="#izmena" data-id="{{$c->id}}" class="reply"  onclick="editForm({{$c->id}})">Edit</a></p>
                                    @endif
                                    @endif
                                    <div class="comment-form-wrap pt-5" id="komentar">
                                    </div>
                                </div>

                                @if($c->reply!=null)

                                <ul class="children" >
                                    <li class="comment">
                                        <div class="vcard bio">

                                        </div>
                                        <div id="reply{{$c->id}}" class="comment-body">
                                            <h3>Admin</h3>
                                            <div class="meta mb-3"></div>
                                            <p id="odgovor{{$c->id}}">{{$c->reply}}</p>


                                        </div>





                                    </li>
                                </ul>
                                    @endif
                            </li>

                                @endforeach


                                </ul>

                        <!-- END comment-list -->


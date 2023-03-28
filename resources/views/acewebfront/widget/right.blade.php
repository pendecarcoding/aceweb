
                  <div class="card-right">
                    <div class="header-price">
                      <h4 class="widget-title">
                        <i class="fa fa-rss"></i> Breaking News
                      </h4>
                    </div>
                    <div class="widget-post-bx">
                      @foreach(getnewnews() as $i => $v)
                      @php
                      $day = date('l', strtotime($v->created_at));
                      @endphp
                      <div class="widget-post clearfix">
                        <div class="dlab-post-media">
                          <img
                            src="{{ getimage($v->banner) }}"
                            width="100"
                            height="73"
                            alt=""
                          />
                        </div>
                        <div class="dlab-post-info">
                          <div class="dlab-post-meta" style="padding-left: 10px;">

                              <div class="post-date">
                                <strong>{{$day.', '.$v->created_at}}</strong>
                                </div>

                          </div>
                          <div class="dlab-post-header">
                            <h6 class="post-title">
                              <a
                                href="{{ url('newsroom/'.$v->slug) }}"
                                >{{ $v->title }}</a
                              >
                            </h6>
                          </div>
                        </div>
                      </div>
                      @endforeach


                      <p></p>

                      <div align="center">
                        <a
                          class="btn btn-danger"
                          href="{{url('newsroom')}}"
                          role="button"
                          >All news</a
                        >
                      </div>
                    </div>
                  </div>

                  


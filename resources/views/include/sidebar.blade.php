<div class="col-md-3 well">
                                <form method="GET" action="{{ url('/blog') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0" role="search">
                                        <div class="input-group">
                                                <input type="text" class="form-group" name="search" placeholder="Search..." value="{{ request('search') }}">
                                                <br>
                                                <span class="input-group-addon"> <button  type="submit">
                                                        <i class="material-icons">search</i></button>
                                                </span>
                                                </div>
                                        </form>                                        
                                <div class="">
                                        <h2 class="title">Archives</h2>
                                        <ol class="list-unstyled">
                                                @foreach ($archives as $stats)
                                                        <li><a href="/?month={{$stats['month']}}&year={{$stats['year']}}">
                                                                 {{ $stats['month']. ' ' . $stats['year']  }}
                                                        </a></li>
                                                @endforeach
                                        </ol>
                                </div>
                                <div class="">
                                                <h2 class="title">Tags</h2>
                                                <ol class="list-unstyled">
                                                        
                                                        @if(count($tags) > 0)
                                                        @foreach ($tags as $tag)
                                                                <li><a href="/post/tags/{{ $tag }}">
                                                                         {{ $tag  }}
                                                                </a></li>
                                                        @endforeach
                                                        @else
                                                        <p>No Tags found</p>
                                                        @endif
                                                </ol>
                                        </div>
                                <div class="">
                                                <h2 class="title">Categories</h2>
                                                <ul>
                                                        <li>ADD</li>
                                                        <li>ADD</li>
                                                        <li>ADD</li>
                                                        <li>ADD</li>
                                                        <li>ADD</li>
                                                        <li>ADD</li>
                                                </ul>
                                </div>

                        </div>
<div>
    <footer>
      <div class="more-main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6 d-flex">
                    <div class="pe-4 d-flex flex-column">
                        <h3 class="text-uppercase pt-5 pb-3">Dc comics</h3>
                        <ul>
                            @foreach ($linksComics as $link)
                            <li class="d-flex flex-column">
                                <a class="pt-1 link-color" href="{{$link['href']}}">{{ $link['title'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                        <h3 class="text-uppercase pt-2 pb-3">Shop</h3> 
                        <ul>
                            @foreach ($linksShop as $link)
                            <li class="d-flex flex-column">
                                <a class="pt-1 link-color" href="{{$link['href']}}">{{ $link['title'] }}</a>
                            </li>
                            @endforeach
                        </ul>                          
                    </div>
                    <div class="pe-4 d-flex flex-column">
                        <h3 class="text-uppercase pt-5 pb-3">Dc</h3>
                        <ul>
                            @foreach ($linksDc as $link)
                            <li class="d-flex flex-column">
                                <a class="pt-1 link-color" href="{{$link['href']}}">{{ $link['title'] }}</a>
                            </li>
                            @endforeach
                        </ul>                    
                    </div>
                    <div class="d-flex flex-column">
                        <h3 class="text-uppercase pt-5 pb-3">Sites</h3>
                        <ul>
                            @foreach ($linksSites as $link)
                            <li class="d-flex flex-column">
                                <a class="pt-1 link-color" href="{{$link['href']}}">{{ $link['title'] }}</a>
                            </li>
                            @endforeach
                        </ul>        
                    </div>
                </div>
                <div class="col-6">
                    <img class="bg-logo" src="/images/dc-logo-bg.png" alt="dc logo">
                </div>
            </div>
        </div>
    </div>
        <div class="container d-flex justify-content-between align-items-center align-content-center py-4">
            <button class="text-uppercase py-3">
              <a class="p-3" href="#">Sign-up now!</a>
            </button>
            <div class="d-flex justify-content-between align-items-center flex-nowrap">
              <h4 class="text-uppercase px-2">Follow us</h4>
              <div class="px-2">
                <img src="/images/footer-facebook.png" alt="#">
              </div>
              <div class="px-2">
                <img src="/images/footer-periscope.png" alt="#">
              </div>
              <div class="px-2">
                <img src="images/footer-pinterest.png" alt="#">
              </div>
              <div class="px-2">
                <img src="/images/footer-twitter.png" alt="#">
              </div>
              <div class="px-2">
                <img src="/images/footer-youtube.png" alt="#">
              </div>
            </div>
          </div>
    </footer>
</div>
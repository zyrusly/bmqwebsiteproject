<div class="landing">
    <div class="construction " style="">
        <div class="construction-img"></div>
        <div class="construction-welcome fade-in-left {{ request()->routeIs('index')? 'c-highlight':'' }}" >
            <h3>CONSTRUCTION</h3>
            <p>
                A cornerstone of modern society, encompasses a vast range of activities, 
                from skyscrapers to road networks. It melds innovation, engineering, and skilled labor to shape our environment.
            </p>
            @if(Route::current()->getName() == 'index')
            <a href="#bmq-title" class="btn btn-outline-light">
                LEARN MORE
            </a>
            @else
            <a href="{{ route('index') }}" class="btn btn-outline-light">
                LEARN MORE
            </a>
            @endif
        </div> 
        
    </div>
    <div class="ict" >
        <div class="ict-welcome fade-in-right {{ request()->routeIs('ict.index')? 'i-highlight':'' }}">
            <h3>ICT</h3>
            <p>
                The driving force behind our interconnected world, shaping communication,
                work, and innovation. This dynamic sector encompasses technology, software, and global connectivity, 
                revolutionizing industries and our daily lives. 
            </p>

            <a  href="{{ route('ict.index') }}" class="btn btn-outline-dark">
                LEARN MORE
            </a>
        </div>
    </div>
</div>
@if(Route::current()->getName() == 'index')
<div class="landing-mobile ">
    <div class="links-mobile  fixed-top">
        <a href="{{ route('index') }}" class="page-link link-active"><h3>CONSTRUCTION</h3></a>
        <a href="{{ route('ict.index') }}" class="page-link"><h3>ICT</h3></a> 
    </div>
    <p>
        A cornerstone of modern society, encompasses a vast range of activities, 
        from skyscrapers to road networks. It melds innovation, engineering, and skilled labor to shape our environment.
    </p>
</div>
@else
<div class="ict-landing-mobile ">
    <div class="links-mobile  fixed-top">
        <a href="{{ route('index') }}" class="page-link "><h3>CONSTRUCTION</h3></a>
        <a href="{{ route('ict.index') }}" class="page-link link-active"><h3>ICT</h3></a> 
    </div>
    <p>
        The driving force behind our interconnected world, shaping communication,
        work, and innovation. This dynamic sector encompasses technology, software, and global connectivity, 
        revolutionizing industries and our daily lives. 
    </p>
</div>
@endif
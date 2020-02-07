@if(Request::route()->getName()=='HOME')
    <a href = "/about">about</a>
    <a href = "/contact">contact</a> 
@endif

@if(Request::route()->getName()=='ABOUT')
    <a href = "/about">home</a>
    <a href = "/contact">contact</a> 
@endif

@if(Request::route()->getName()=='CONTACT')
    <a href = "/about">about</a>
    <a href = "/">home</a> 
@endif

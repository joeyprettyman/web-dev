var debug = "on";
var mode = "light";

if( debug.toLowerCase() == "on" ) {
    // DEBUG
    const debug = document.createElement( 'debug' );
    const horizontals = document.createElement( 'horizontals' );
    const verticals = document.createElement( 'verticals' );

    // LATITUDE / LONGITUDE
    const lattitude = document.createElement( 'lattitude' );
    const longitude = document.createElement( 'longitude' );

    // HORIZONTAL LINES
    const h1 = document.createElement( 'horizontal-line-1' );
    const h2 = document.createElement( 'horizontal-line-2' );
    const h3 = document.createElement( 'horizontal-line-3' );
    const h4 = document.createElement( 'horizontal-line-4' );
    const h5 = document.createElement( 'horizontal-line-5' );
    const h6 = document.createElement( 'horizontal-line-6' );
    const h7 = document.createElement( 'horizontal-line-7' );
    const h8 = document.createElement( 'horizontal-line-8' );
    const h9 = document.createElement( 'horizontal-line-9' );
    const h10 = document.createElement( 'horizontal-line-10' );

    // HORIZONTAL SUB LINES
    const hs1 = document.createElement( 'horizontal-sub-1' );
    const hs2 = document.createElement( 'horizontal-sub-2' );
    const hs3 = document.createElement( 'horizontal-sub-3' );
    const hs4 = document.createElement( 'horizontal-sub-4' );
    const hs5 = document.createElement( 'horizontal-sub-5' );
    const hs6 = document.createElement( 'horizontal-sub-6' );
    const hs7 = document.createElement( 'horizontal-sub-7' );
    const hs8 = document.createElement( 'horizontal-sub-8' );
    const hs9 = document.createElement( 'horizontal-sub-9' );
    const hs10 = document.createElement( 'horizontal-sub-10' );




    // VERTICAL LINES
    const v1 = document.createElement( 'vertical-line-1' );
    const v2 = document.createElement( 'vertical-line-2' );
    const v3 = document.createElement( 'vertical-line-3' );
    const v4 = document.createElement( 'vertical-line-4' );
    const v5 = document.createElement( 'vertical-line-5' );
    const v6 = document.createElement( 'vertical-line-6' );
    const v7 = document.createElement( 'vertical-line-7' );
    const v8 = document.createElement( 'vertical-line-8' );
    const v9 = document.createElement( 'vertical-line-9' );
    const v10 = document.createElement( 'vertical-line-10' );

    // VERTICAL SUB LINES
    const vs1 = document.createElement( 'vertical-sub-1' );
    const vs2 = document.createElement( 'vertical-sub-2' );
    const vs3 = document.createElement( 'vertical-sub-3' );
    const vs4 = document.createElement( 'vertical-sub-4' );
    const vs5 = document.createElement( 'vertical-sub-5' );
    const vs6 = document.createElement( 'vertical-sub-6' );
    const vs7 = document.createElement( 'vertical-sub-7' );
    const vs8 = document.createElement( 'vertical-sub-8' );
    const vs9 = document.createElement( 'vertical-sub-9' );
    const vs10 = document.createElement( 'vertical-sub-10' );

    // Get body element for appending later.
    const element = document.getElementsByTagName( 'body' )[0];

    // [APPEND] Latitude / Longitude
    element.appendChild( lattitude );
    element.appendChild( longitude );

    // [APPEND] Horizontal Lines
    element.appendChild( h1 );
    element.appendChild( h2 );
    element.appendChild( h3 );
    element.appendChild( h4 );
    element.appendChild( h5 );
    element.appendChild( h6 );
    element.appendChild( h7 );
    element.appendChild( h8 );
    element.appendChild( h9 );
    element.appendChild( h10 );

    // [APPEND] Horizontal Sub Lines
    element.appendChild( hs1 );
    element.appendChild( hs2 );
    element.appendChild( hs3 );
    element.appendChild( hs4 );
    element.appendChild( hs5 );
    element.appendChild( hs6 );
    element.appendChild( hs7 );
    element.appendChild( hs8 );
    element.appendChild( hs9 );
    element.appendChild( hs10 );

    // [APPEND] Vertical Lines
    element.appendChild( v1 );
    element.appendChild( v2 );
    element.appendChild( v3 );
    element.appendChild( v4 );
    element.appendChild( v5 );
    element.appendChild( v6 );
    element.appendChild( v7 );
    element.appendChild( v8 );
    element.appendChild( v9 );
    element.appendChild( v10 );

    // [APPEND] Vertical Sub Lines
    element.appendChild( vs1 );
    element.appendChild( vs2 );
    element.appendChild( vs3 );
    element.appendChild( vs4 );
    element.appendChild( vs5 );
    element.appendChild( vs6 );
    element.appendChild( vs7 );
    element.appendChild( vs8 );
    element.appendChild( vs9 );
    element.appendChild( vs10 );


    // [APPEND] Debug
    debug.innerHTML = "Debug: <b>ON</b>";
    horizontals.innerHTML = "Horizontals: <b>ON</b>";
    verticals.innerHTML = "Verticals: <b>ON</b>";

    element.appendChild( debug );
    element.appendChild( horizontals );
    element.appendChild( verticals );

    debug.state = true;

    function toggle() {
        this.state = !this.state;
        //this.innerHTML = this.state ? 'Close' : 'Open';

        if( this.state ) {
            open();
        }

        else {
            close();
        }
    }

    function open() {
        debug.state = true;
        debug.innerHTML = 'Debug: <b>ON</b>';
        debug.style.background = '#53ce40';

        lattitude.style.display = 'block';
        longitude.style.display = 'block';

        h1.style.display = 'block';
        h2.style.display = 'block';
        h3.style.display = 'block';
        h4.style.display = 'block';
        h5.style.display = 'block';
        h6.style.display = 'block';
        h7.style.display = 'block';
        h8.style.display = 'block';
        h9.style.display = 'block';
        h10.style.display = 'block';

        hs1.style.display = 'block';
        hs2.style.display = 'block';
        hs3.style.display = 'block';
        hs4.style.display = 'block';
        hs5.style.display = 'block';
        hs6.style.display = 'block';
        hs7.style.display = 'block';
        hs8.style.display = 'block';
        hs9.style.display = 'block';
        hs10.style.display = 'block';

        v1.style.display = 'block';
        v2.style.display = 'block';
        v3.style.display = 'block';
        v4.style.display = 'block';
        v5.style.display = 'block';
        v6.style.display = 'block';
        v7.style.display = 'block';
        v8.style.display = 'block';
        v9.style.display = 'block';
        v10.style.display = 'block';

        vs1.style.display = 'block';
        vs2.style.display = 'block';
        vs3.style.display = 'block';
        vs4.style.display = 'block';
        vs5.style.display = 'block';
        vs6.style.display = 'block';
        vs7.style.display = 'block';
        vs8.style.display = 'block';
        vs9.style.display = 'block';
        vs10.style.display = 'block';
    }
    
    function close() {
        debug.state = false;
        debug.innerHTML = 'Debug: <b>OFF</b>';
        debug.style.background = '#ce4040';

        lattitude.style.display = 'none';
        longitude.style.display = 'none';

        h1.style.display = 'none';
        h2.style.display = 'none';
        h3.style.display = 'none';
        h4.style.display = 'none';
        h5.style.display = 'none';
        h6.style.display = 'none';
        h7.style.display = 'none';
        h8.style.display = 'none';
        h9.style.display = 'none';
        h10.style.display = 'none';

        hs1.style.display = 'none';
        hs2.style.display = 'none';
        hs3.style.display = 'none';
        hs4.style.display = 'none';
        hs5.style.display = 'none';
        hs6.style.display = 'none';
        hs7.style.display = 'none';
        hs8.style.display = 'none';
        hs9.style.display = 'none';
        hs10.style.display = 'none';

        v1.style.display = 'none';
        v2.style.display = 'none';
        v3.style.display = 'none';
        v4.style.display = 'none';
        v5.style.display = 'none';
        v6.style.display = 'none';
        v7.style.display = 'none';
        v8.style.display = 'none';
        v9.style.display = 'none';
        v10.style.display = 'none';

        vs1.style.display = 'none';
        vs2.style.display = 'none';
        vs3.style.display = 'none';
        vs4.style.display = 'none';
        vs5.style.display = 'none';
        vs6.style.display = 'none';
        vs7.style.display = 'none';
        vs8.style.display = 'none';
        vs9.style.display = 'none';
        vs10.style.display = 'none';
    }

    debug.onclick = function() {
        if( debug.state == true ) {
            close();
        }

        else {
            open();
        }
    }





    horizontals.state = true;

    function openHorizontals() {
        horizontals.state = true;
        horizontals.innerHTML = 'Horizontals: <b>ON</b>';
        horizontals.style.background = '#53ce40';

        lattitude.style.display = 'block';

        h1.style.display = 'block';
        h2.style.display = 'block';
        h3.style.display = 'block';
        h4.style.display = 'block';
        h5.style.display = 'block';
        h6.style.display = 'block';
        h7.style.display = 'block';
        h8.style.display = 'block';
        h9.style.display = 'block';
        h10.style.display = 'block';

        hs1.style.display = 'block';
        hs2.style.display = 'block';
        hs3.style.display = 'block';
        hs4.style.display = 'block';
        hs5.style.display = 'block';
        hs6.style.display = 'block';
        hs7.style.display = 'block';
        hs8.style.display = 'block';
        hs9.style.display = 'block';
        hs10.style.display = 'block';
    }
    
    
    function closeHorizontals() {
        horizontals.state = false;
        horizontals.innerHTML = 'Horizontals: <b>OFF</b>';
        horizontals.style.background = '#ce4040';

        lattitude.style.display = 'none';

        h1.style.display = 'none';
        h2.style.display = 'none';
        h3.style.display = 'none';
        h4.style.display = 'none';
        h5.style.display = 'none';
        h6.style.display = 'none';
        h7.style.display = 'none';
        h8.style.display = 'none';
        h9.style.display = 'none';
        h10.style.display = 'none';

        hs1.style.display = 'none';
        hs2.style.display = 'none';
        hs3.style.display = 'none';
        hs4.style.display = 'none';
        hs5.style.display = 'none';
        hs6.style.display = 'none';
        hs7.style.display = 'none';
        hs8.style.display = 'none';
        hs9.style.display = 'none';
        hs10.style.display = 'none';
    }    



    horizontals.onclick = function() {
        if( horizontals.state == true ) {
            closeHorizontals();
        }

        else {
            openHorizontals();
        }
    }





    verticals.state = true;

    function openVerticals() {
        verticals.state = true;
        verticals.innerHTML = 'Verticals: <b>ON</b>';
        verticals.style.background = '#53ce40';

        longitude.style.display = 'block';

        v1.style.display = 'block';
        v2.style.display = 'block';
        v3.style.display = 'block';
        v4.style.display = 'block';
        v5.style.display = 'block';
        v6.style.display = 'block';
        v7.style.display = 'block';
        v8.style.display = 'block';
        v9.style.display = 'block';
        v10.style.display = 'block';

        vs1.style.display = 'block';
        vs2.style.display = 'block';
        vs3.style.display = 'block';
        vs4.style.display = 'block';
        vs5.style.display = 'block';
        vs6.style.display = 'block';
        vs7.style.display = 'block';
        vs8.style.display = 'block';
        vs9.style.display = 'block';
        vs10.style.display = 'block';
    }
    
    
    function closeVerticals() {
        verticals.state = false;
        verticals.innerHTML = 'Verticals: <b>OFF</b>';
        verticals.style.background = '#ce4040';

        longitude.style.display = 'none';

        v1.style.display = 'none';
        v2.style.display = 'none';
        v3.style.display = 'none';
        v4.style.display = 'none';
        v5.style.display = 'none';
        v6.style.display = 'none';
        v7.style.display = 'none';
        v8.style.display = 'none';
        v9.style.display = 'none';
        v10.style.display = 'none';

        vs1.style.display = 'none';
        vs2.style.display = 'none';
        vs3.style.display = 'none';
        vs4.style.display = 'none';
        vs5.style.display = 'none';
        vs6.style.display = 'none';
        vs7.style.display = 'none';
        vs8.style.display = 'none';
        vs9.style.display = 'none';
        vs10.style.display = 'none';
    }    



    verticals.onclick = function() {
        if( verticals.state == true ) {
            closeVerticals();
        }

        else {
            openVerticals();
        }
    }
}
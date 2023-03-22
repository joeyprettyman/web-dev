$years = [
	'1995', '1996', '1997', '1998', '1999', 
	'2000', '2001', '2002', '2003', '2004', 
	'2005', '2006', '2007', '2008', '2009', 
	'2010', '2011', '2012', '2013', '2014', 
	'2015', '2016', '2017', '2018', '2019', 
	'2020', '2021'
];

$years = $years.reverse();

$months = 12;

$iterations = $years.length;

for( let i = 1; i < $iterations; i++ ) {
	console.log( i );
	console.log( $years[i] );
	
	
	
	document.write('&lt;!-- ' + $years[i] + ' --&gt;<br>');
	document.write('&lt;div class="container"&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&lt;div id="year"&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="#" onClick="toggle(\'' + $years[i] + '\');"&gt;' + $years[i] + '&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br><br>');
	
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="letters hidden" id="' + $years[i] + '"&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL12' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;December&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL11' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;November&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL10' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;October&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL09' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;September&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL08' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;August&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL07' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;July&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL06' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;June&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL05' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;May&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL04' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;April&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL03' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;March&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL02' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;February&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a href="EL01' + $years[i].slice(-2) + '.htm" target="_blank"&gt;&lt;strong&gt;January&lt;/strong&gt; - Test&lt;/a&gt;<br>');
	document.write('&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>');
	document.write('&lt;/div&gt;<br>');
	
	document.write('<br><br>');
}









	
	<!-- 2018 -->
	<div class="container">
		<div id="year">
			<a href="#" onClick="toggle('2018');">2018</a>
		</div>
		
		<div class="letters hidden" id="2018">
			<a href="EL1218.htm" target="_blank"><strong>December</strong> - Test</a>
			<a href="EL1118.htm" target="_blank"><strong>November</strong> - Test</a>
			<a href="EL1018.htm" target="_blank"><strong>October</strong> - Test</a>
			<a href="EL0918.htm" target="_blank"><strong>September</strong> - Test</a>
			<a href="EL0818.htm" target="_blank"><strong>August</strong> - Test</a>
			<a href="EL0718.htm" target="_blank"><strong>July</strong> - Test</a>
			<a href="EL0618.htm" target="_blank"><strong>June</strong> - Test</a>
			<a href="EL0518.htm" target="_blank"><strong>May</strong> - Test</a>
			<a href="EL0418.htm" target="_blank"><strong>April</strong> - Test</a>
			<a href="EL0318.htm" target="_blank"><strong>March</strong> - Test</a>
			<a href="EL0218.htm" target="_blank"><strong>February</strong> - Test</a>
			<a href="EL0118.htm" target="_blank"><strong>January</strong> - Test</a>
		</div>
	</div>
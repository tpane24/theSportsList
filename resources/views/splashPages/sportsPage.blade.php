@extends('templates.masterSplash')

@section('metaTags')
@endsection

@section('title')
  {{ config('app.name') }} | home
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('css/splashPage.css') }}">
  <link rel="stylesheet" href="{{ URL::to('css/list.css') }}">
@endsection

@section('body')
@include('templates/nav/viewsports-active')
<div class="contentContainer container">
  <div class="h3 text-center light-blue-text text-center banner-title">{{ config('app.name') }} | Sports Offered</div>

  <div class="containerList">
	<div class="header">
		<h1>Sports on <span class="light-blue-text">{{ config('app.name') }}</span></h1>
		<p>Click on the Sports below to show additional content.</p>
	</div>
	<!-- Item 1 -->
	<div class="item">
		<input type="checkbox" id="box-1">
		<label class="h5" for="box-1">Basketball</label>
		<div>
			<h3>Basketball</h3>
			<p>Basketball is one of the most popular sports in America. It can be played indoors and outdoors. All you need is a hoop, a ball, a pair of shoes! The objective of the game is to score more baskets than your opponent, before time ends, by shooting the ball through a hoop. Since Basketball is so popular in America, you can expect to find basketball tournaments and basketball leagues for all ages and competition levels on {{ config('app.name') }}!</p>
		</div>
	</div>
	<!-- Item 2 -->
	<div class="item">
		<input type="checkbox" id="box-2">
		<label class="h5" for="box-2">Volleyball</label>
		<div>
			<h3>Volleyball</h3>
			<p>Volleyball is a great game that involves two teams standing on opposite sides of a net. Players hit a ball back and forth without catching it. If the ball hits the ground, a point is awarded. First to a certain score, wins. You will find all kinds of Volleyball games on {{ config('app.name') }} including beach volleyball, indoor volleyball, competitive volleyball leagues and volleyball tournaments.</p>
		</div>
	</div>
	<!-- Item 3 -->
	<div class="item">
		<input type="checkbox" id="box-3">
		<label class="h5" for="box-3">Pickleball</label>
		<div>
			<h3>Pickleball</h3>
			<p>Pickleball is one of the fastest growing sports in America and a new favorite way to stay active. It is kind of like Tennis but is played on a Basketball court. {{ config('app.name') }} will connect you to Pickleball leagues and Pickleball tournaments!</p>
		</div>
	</div>
	<!-- Item 4 -->
	<div class="item">
		<input type="checkbox" id="box-4">
		<label class="h5" for="box-4">Soccer</label>
		<div>
			<h3>Soccer</h3>
			<p>Soccer, also known as football, is the most popular sport in Europe. It is played with a ball and your feet. The objective is to kick a ball into a goal. There is so much growth with Soccer in America right now. You can expect to find a ton of soccer leagues and soccer tournaments on {{ config('app.name') }}, especially ones for competitve youth!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-5">
		<label class="h5" for="box-5">Golf</label>
		<div>
			<h3>Golf</h3>
			<p>It's not hard to find a golf course to play a round of golf, but {{ config('app.name') }} can connect you to Golf tournaments and to local Golf fundraisers. {{ config('app.name') }} is a GREAT tool for serious players to find events worth playing in!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-6">
		<label class="h5" for="box-6">Baseball</label>
		<div>
			<h3>Baseball</h3>
			<p>Baseball is a sport in which a pitcher tries to throw a ball past a batter. That batter tries to hit the ball to get on a base. If he advances to the last base, a point is earned. Baseball games will typically be for men only. Girls baseball is called softball. You will be able to connect to Baseball leagues and Baseball tournaments for all ages!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-7">
		<label class="h5" for="box-7">Softball</label>
		<div>
			<h3>Softball</h3>
			<p>Softball is baseball with one key difference. The pitcher throws the ball underhand instead of overhand. {{ config('app.name') }} will connect you to youth women Softball leagues or to co-ed Sunday "beer" leagues. You can connect with Softball Leagues and Softball tournaments with {{ config('app.name') }}!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-8">
		<label class="h5" for="box-8">Kickball</label>
		<div>
			<h3>Kickball</h3>
			<p>Kickball is a fun alternative to baseball or softball. It is played the exact same way, but you kick the ball instead of hitting with a bat. {{ config('app.name') }} will connect you to plenty of casual Kickball leagues and tournaments for all ages and genders.</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-9">
		<label class="h5" for="box-9">T-Ball</label>
		<div>
			<h3>T-Ball</h3>
			<p>T-Ball is Baseball for young beginners. {{ config('app.name') }} will connect you to youth T-Ball leagues and T-Ball tournaments to help your child discover an early love for Baseball!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-10">
		<label class="h5" for="box-10">Football</label>
		<div>
			<h3>Football</h3>
			<p>Football is America's most watched game. It is a very physical sport and is not for everyone. Under the football section you will only find Tackle Football. {{ config('app.name') }} will connect you to a competitive level of play including excellent youth football leagues and youth football tournaments.</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-11">
		<label class="h5" for="box-11">Flag Football</label>
		<div>
			<h3>Flag Football</h3>
			<p>Flag Football is a popular version of Football with out the tackling. Instead of tackling you pull the opponents flag. {{ config('app.name') }} will connect you to Flag Football leagues and Flag Football tournaments for both adults and youths! Flag Football will also include all other versions of non-tackling Football including 2-hand touch football leagues or tournaments.</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-12">
		<label class="h5" for="box-12">Rugby</label>
		<div>
			<h3>Rugby</h3>
			<p>Rugby is best described as the European version of football, but has a large following in America. {{ config('app.name') }} will connect you to loads of Rugby leagues and Rugby tournaments especially at the club level for adults. We also connect you with a ton of youth options. Both women's Rugby and men's Rugby are offered.</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-13">
		<label class="h5" for="box-13">Australian Football</label>
		<div>
			<h3>Australian Football</h3>
			<p>This sport is the Australian version of Rugby. It isn't very popular in America, but can still connect you to some youth and adult Australian Football leagues and Australian Football tournaments here in the states with {{ config('app.name') }}!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-14">
		<label class="h5" for="box-14">Tennis</label>
		<div>
			<h3>Tennis</h3>
			<p>Tennis is an incredibly popular sport that is typically played as singles or doubles. The game is played by hitting a ball over a net with a racket before the ball bounces twice. {{ config('app.name') }} can connect you to loads of youth and adult tennis tournaments and tennis leagues including indoor and outdoor. We also can connect you to drop-in hours at local courts so you can find the perfect place to play your own games.</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-15">
		<label class="h5" for="box-15">Badminton</label>
		<div>
			<h3>Badminton</h3>
			<p>Badminton is Tennis that is played in the air with a birde instead of a ball. {{ config('app.name') }} will help you doubles and singles Badminton tournamentsand Badminton leagues!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-16">
		<label class="h5" for="box-16">RaqueteballBall</label>
		<div>
			<h3>Raqueteball</h3>
			<p>Raqueteball is very similar to Tennis but both teams play on the same side of the court. It makes for a very fast paced game requiring intense focus. {{ config('app.name') }} can connect you to local gyms that offer drop-in hours and also can connect you to an occasional Raqueteball league or Raqueteball tournament.</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-17">
		<label class="h5" for="box-17">Lacrosse</label>
		<div>
			<h3>Lacrosse</h3>
			<p>Lacrosse is the perfect mix of Hockey, Soccer, and Football. Its popularity in the U.S. has really exploded. {{ config('app.name') }} can connect you to an abundance of youth options including indoor Lacrosse leagues for the winter. We even connect with adult Lacrosse leagues and Lacrosse tournaments esspecially at the club level.</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-18">
		<label class="h5" for="box-18">Hockey</label>
		<div>
			<h3>Hockey</h3>
			<p>Hockey is an extremely competitve sport that starts at a very young age. It is a game that is played while wearing ice skates. You skate around the ice with a stick. You use the stick to hit a puck and try to get it in to the opponents goal. {{ config('app.name') }} can connect you to competitve Hockey tournaments and Hockey leagues. All Hockey games will be played on ICE! There is a seperate section for Roller Hockey and Broomball!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-19">
		<label class="h5" for="box-19">Roller Hockey</label>
		<div>
			<h3>Roller Hockey</h3>
			<p>Roller Hockey is Hockey played on roller blades. It is an easier way to start playing hockey because it requires less equipment. {{ config('app.name') }} will help you find Roller Hockey leagues and Roller Hockey tournament for adults and youths!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-20">
		<label class="h5" for="box-20">Field Hockey</label>
		<div>
			<h3>Field Hockey</h3>
			<p>Field Hockey is another version of Hockey played on a large field with much larger team size normally consisting of 11 players. {{ config('app.name') }} will connect you to Filed Hockey Leagues and Field Hockey tournaments for all ages and genders!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-21">
		<label class="h5" for="box-21">Broomball</label>
		<div>
			<h3>Broomball</h3>
			<p>Broomball is basically how people played hockey when they had ice but no equipment. Instead of skates you wear shoes and instead of sticks you use brooms. {{ config('app.name') }} will connect you to local Broomball leagues and Broomball tournaments varying in age level. Broomball is really a casual sport and is to Hockey as "beer" league softball is to baseball.</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-22">
		<label class="h5" for="box-22">Handball</label>
		<div>
			<h3>Handball</h3>
			<p>Handball is typically played as 7 on 7 and is often described as Soccer with your hands even though it is typically played on a hardwood court. {{ config('app.name') }} can connect you to some awesome Handball leagues and Handball tournaments to help you discover a sport you never knew you loved!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-23">
		<label class="h5" for="box-23">Ultimate</label>
		<div>
			<h3>Ultimate</h3>
			<p>Ultimate is the most fun you will ever have with a frisbee. {{ config('app.name') }} can connect you to local Ultimate tournaments and Ultimate leagues for all ages including indoor games for the winter!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-24">
		<label class="h5" for="box-24">Disk Golf</label>
		<div>
			<h3>Disk Golf</h3>
			<p>Disc Golf has taken over parks all over the country. It is basically Golf, but with a frisbee. {{ config('app.name') }} can help connect you to new courses that you never knew exsisted for a new challenge! We can even connect you to Disk Golf tournaments and Disk Golf leagues to test your skills even further!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-25">
		<label class="h5" for="box-25">Paralympic Sports</label>
		<div>
			<h3>Paralympic Sports</h3>
			<p>This category will include every Paralympic sport offered by local recreation centers and sports providers. {{ config('app.name') }} will connect you to Paralympic leagues and Paralympic tournaments so that you always have a place to play and compete!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-26">
		<label class="h5" for="box-26">Water Polo</label>
		<div>
			<h3>Water Polo</h3>
			<p>Water Polo is a sport that nearly everyone knows exsists, but few have ever played. {{ config('app.name') }} will connect a serious player to Water Polo tournaments or Water Polo leagues and will connect newcomers to drop-in hours, so they can experience this sport for themselves.</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-27">
		<label class="h5" for="box-27">Bowling</label>
		<div>
			<h3>Bowling</h3>
			<p>It isn't hard to find a bowling alley to play at, but {{ config('app.name') }} can connect you to Bowling tournaments and Bowling leagues to further develope and test your skills!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-28">
		<label class="h5" for="box-28">Dodgeball</label>
		<div>
			<h3>Dodgeball</h3>
			<p>Dodgeball is every young child's favorite game and they love playing it in gym class. However, after middle school gym is over there is no where to play. {{ config('app.name') }} can connect your child to Dodgeball tournaments, and Dodgeball league. We even connect to adult Dodgeball games to keep your youth alive!</p>
		</div>
	</div>
  <div class="item">
		<input type="checkbox" id="box-29">
		<label class="h5" for="box-29">Quidditch</label>
		<div>
			<h3>Quidditch</h3>
			<p>Yes, Quidditch from Harry Potter! No, it is unlikely that you will actually fly. Muggle Quidditch leagues and Quidditch tournaments have been popping up all over the country and {{ config('app.name') }} can help you connect to them.</p>
		</div>
	</div>
</div>

<footer>
	Think there is anyother sport we should offer?<br />
	<a href="/contact">Contact Us</a>
</footer>

</div>

@endsection

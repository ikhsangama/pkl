@extends('layouts.main')
@section('content')
		<div class="container">
			<div class="row">
				<div class="nekatoph page-header">
					<h1>NEKANEKA <b>LISTING</b><br />
					<p></p><br />
					<p class="nekatophs">Where happiness are looking for your</small></p></h1>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row headsm">
				<div class="col-sm-2 col-sm-offset-5">
					<p><center>HOME | <b>ADVENTURE</center></b></p>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<select class="form-control"><option>Select Destination</option></select>
				</div>
				<div class="col-sm-3">
					<select class="form-control"><option>Duration</option></select>
				</div>
				<div class="col-sm-2">
					<select class="form-control"><option>Departing</option></select>
				</div>
				<div class="col-sm-2">
					<select class="form-control"><option>Price</option></select>
				</div>
				<div class="col-sm-2">
					<button type="submit" class="srcbtn btn btn-inverse">Search</button>
				</div>
			</div>
		</div>
		<br />
		<br />
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h2 style="text-align: center;">
						TRIP <b>OVERVIEW</b><br /><br />
					</h2>
					<p>
						Lorem ipsum dolor sit amet, ex mea reque velit volumus, eius splendide voluptaria pro at. Ut cibo timeam constituto sed, numquam civibus an eum.
					</p>
					<br /><br />
					<div class="col-sm-6 ovfont1 overview-txt">
						<div class="col-sm-4">
							<p><b>START</b></p>
							<p><b>FINISH</b></p>
							<p><b>COUNTRIES</b></p>
						</div>
						<div class="col-sm-7">
							<p>KATHMANDU, NEPAL</p>
							<p>KATHMANDU, NEPAL</p>
							<p>NEPAL</p>
						</div>
					</div>
					<div class="col-sm-6 ovfont2">
						<div class="col-sm-5">
							<p><b>AGES</b></p>
							<p><b>GROUP SIZE</b></p>
						</div>
						<div class="col-sm-6">
							<p>MIN 16</p>
							<p>MIN 1, MAX 12</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="col-sm-6">
						<p class="ovfont3">ACTIVITIES</p>
					</div>	
					<div class="col-sm-6">
						<p class="ovfont3">ACTIVITY LEVEL</p>
					</div>
					<br />
					<div class="col-sm-4">
							<p class="ovfont4">RATING</p>
					</div>
					<div class="col-sm-4">
							<p class="ovfont4">DURATION</p>
					</div>
					<div class="col-sm-4">
							<p class="ovfont4">BUDGET</p>
					</div>
					<div>
						<a href="#" class="book-btn" role="button">BOOK THIS TRIP</a>
					</div>
				</div>
			</div>
		</div>
		<br />
		<br />
		<div class="container">
			<div class="row">
				<div class="inchead page-header">
					<h3>TRIP <b>INCLUSION</b><br /></h3>
					<p></p><br />
					<p class="inctxt">Lorem ipsum dolor sit amet, ex mea reque velit volumus, eius splendide voluptaria pro at. <br />Ut cibo timeam constituto sed, numquam civibus an eum.</small></p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<p class="incicon">MEALS</p><br />
					<p class="incdesc1">breakfasts, lunches, dinners</p>
				</div>
				<div class="col-sm-4">
					<p class="incicon">TRANSPORT</p><br />
					<p class="incdesc2">Bus, Minibus, Raft, Minibus</p>
				</div>
				<div class="col-sm-4">
					<p class="incicon">ACCOMODATION</p><br />
					<p class="incdesc3">Camping (with basic facillities (1 night)</p>
					<p class="incdesc4">Guesthouse (5 nights), Hotel (3 nights)</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="inchead page-header">
					<h3>TRIP <b>DATE & PRICE</b><br /></h3>
					<p></p><br />
					<p class="inctxt">Lorem ipsum dolor sit amet, ex mea reque velit volumus, eius splendide voluptaria pro at. <br />Ut cibo timeam constituto sed, numquam civibus an eum.</small></p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<table border="0" class="tabstyling">
					<tr class="tabspace">
						<th class="tabpad">DEPARTURE</th>
						<th class="tabpad">TRIP STATUS</th>
						<th class="tabpad">PRICE (PER PERSON)</th>
						<th class="tabpad">ACTION</th>
					</tr>
					<tr class="tabspace">
						<td class="tabpad">19 Dec - 28 Dec 2016</td>
						<td class="tabpad">Fully Booked</td>
						<td class="tabpad">$1,200 - $1,400</td>
						<td class="tabpad"><a href="#" class="book-btn2" role="button">BOOK NOW</a></td>
					</tr>
					<tr class="tabspace">
						<td class="tabpad">19 Dec - 28 Dec 2016</td>
						<td class="tabpad">Fully Booked</td>
						<td class="tabpad">$1,200 - $1,400</td>
						<td class="tabpad"><a href="#" class="book-btn2" role="button">BOOK NOW</a></td>
					</tr>
					<tr class="tabspace">
						<td class="tabpad">19 Dec - 28 Dec 2016</td>
						<td class="tabpad">Fully Booked</td>
						<td class="tabpad">$1,200 - $1,400</td>
						<td class="tabpad"><a href="#" class="book-btn2" role="button">BOOK NOW</a></td>
					</tr>
					<tr class="tabspace">
						<td class="tabpad">19 Dec - 28 Dec 2016</td>
						<td class="tabpad">Fully Booked</td>
						<td class="tabpad">$1,200 - $1,400</td>
						<td class="tabpad"><a href="#" class="book-btn2" role="button">BOOK NOW</a></td>
					</tr>
					<tr class="tabspace">
						<td class="tabpad">19 Dec - 28 Dec 2016</td>
						<td class="tabpad">Fully Booked</td>
						<td class="tabpad">$1,200 - $1,400</td>
						<td class="tabpad"><a href="#" class="book-btn2" role="button">BOOK NOW</a></td>
					</tr>
					<tr class="tabspace">
						<td class="tabpad">19 Dec - 28 Dec 2016</td>
						<td class="tabpad">Fully Booked</td>
						<td class="tabpad">$1,200 - $1,400</td>
						<td class="tabpad"><a href="#" class="book-btn2" role="button">BOOK NOW</a></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="inchead page-header">
					<h3>RELATED <b>TRIPS</b><br /></h3>
					<p></p><br />
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="cart-box">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="cart-box">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="cart-box">
					</div>
				</div>
			</div>
		</div>
@endsection
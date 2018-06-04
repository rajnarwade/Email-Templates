<!DOCTYPE html>
<html>
<head>
	<title>Email Template</title>
	<link href="https://fonts.googleapis.com/css?family=Antic|Architects+Daughter|Arimo" rel="stylesheet">
	<style type="text/css">
		.f-row{
			background:#5170FF;
			padding: 20px;
			font-family:'Antic', sans-serif;
			color: white;
			font-size: 25px;
		}
		.f-row-td-f{
			width: 70%;
			padding: 10px;
		}
		.f-row-td-div .frtdspan-f{
			text-decoration: underline;
			color: #ffb45a;
		}
		.f-row-td-div .frtdspan-s{
			display: block;
			text-align: center;
			font-family: 'Architects Daughter', cursive;			
		}
		.f-row-td-s{
			width: 20%;
			padding: 30px 30px 0 0;
		}
		.s-row{
			background:#5170FF;
		}
		.s-row--td img{
			float: right;
			width: 80%;
		}
		.t-row-td{
			padding-top: 25px;
		}
		.t-row-td .t-row-td-span-f{
			display: inline-block;
			max-width: 160px;
		}
		.t-row-td-span-s{
			display: inline-block;
			width: 70%;
			font-family: 'Arimo', sans-serif;
			font-size: 22px;
			vertical-align: top;
			padding-top: 25px;
			padding-left: 10px;
		}
		.fourth-row-td{
			padding-top: 25px;
		}
		.fourth-row-tdspan-f{
			display: inline-block;
			width: calc(100% - 160px);
			font-family: 'Arimo', sans-serif;
			font-size: 22px;
			vertical-align: top;
			padding-top: 25px;
			padding-left: 10px;
			text-align: right;
		}
		.fourth-row-tdspan-s{
			display: inline-block;
			max-width: 160px;
			float: right;
		}
		.fifth-row-td{
			padding-top: 25px;
		}
		.fifth-row-td-span-f{
			display: inline-block;max-width: 160px;
		}
		.fifth-row-td-span-s{
			display: inline-block;
			width: 70%;
			font-family: 'Arimo', sans-serif;
			font-size: 22px;
			vertical-align: top;
			padding-top: 25px;
			padding-left: 10px;
		}
		.sixth-row-td{
			padding-top: 25px;
		}
		.sixth-row-td-span-f{
			display: inline-block;width: calc(100% - 160px);font-family: 'Arimo', sans-serif;font-size: 22px;vertical-align: top;padding-top: 25px;padding-left: 10px;text-align: right;
		}
		.sixth-row-td-span-s{
			display: inline-block;max-width: 160px;float: right;
		}
		.seventh-row-td{
			padding: 0 10%; 
			padding-top: 20px;
			font-family: 'Arimo', sans-serif;
			font-size: 22px;
			text-align: center;
		}
		.eighth-row-td{
			text-align: center;padding: 25px;
		}
		.eighth-row-td a button{
			background: red;
			border: 1px solid red;
			padding: 8px;
			border-radius: 5px;
			font-size: 20px;
			color: white;
			cursor: pointer;
		}
		@media only screen and (max-width: 480px){
			.f-row{
			    display: grid;
			}
			.f-row-td-f{
				width: auto;
			}
			.f-row-td-div{
				text-align: center;
			}
			.f-row-td-s{
				width: auto;
				text-align: center;
			}
			.t-row-td, .fifth-row-td{
				text-align: center;
			}
			/*.fourth-row td, .sixth-row-td{
				display: flex;
    			flex-flow: column;
			}
			.fourth-row-tdspan-f, .sixth-row-td-span-f{
				order: 2;
				padding: 0px 30px;
				width: auto;
				text-align: center;
			}
			.fourth-row-tdspan-s, .sixth-row-td-span-s{
				max-width: none;
				text-align: center;
			}*/
			.t-row-td-span-s{
                width:auto;
                padding-left:0;
            }
            .fourth-row td, .sixth-row-td{
                display:table;
            }
            .fourth-row-tdspan-f, .sixth-row-td-span-f{
                display: table-footer-group;
                text-align:center;
            }
            .fourth-row-tdspan-s, .sixth-row-td-span-s{
                margin: 0 35%;
                display: table-header-group;
            }
		}
	</style>
</head>
<body>
	<div class="main-div">
		<table style="max-width: 715px;border-spacing: 0;" cellpadding="0">
			<tbody>
				<tr class="f-row">
				<td class="f-row-td-f">
						<div class="f-row-td-div">Are you transforming your 
							<span class="frtdspan-f">customer experience
							</span>
							<span class="frtdspan-s" style="">
							with signature moments?
							</span>
						</div>	
				</td>
						<td class="f-row-td-s">
							<img src="Rocket-mail.png"  style="max-width:150px;">
						</td>
			</tr>
			<tr class="s-row">
				<td class="s-row--td" colspan="2"> <img src="Mail-clouds.png"></td>
			</tr>
			<tr class="t-row">
				<td class="t-row-td" colspan="2">
					<span class="t-row-td-span-f">
						<img src="email-first-img.png" style="width: 115px">
					</span>
					<span class="t-row-td-span-s"> Of organisations will redirect their investments to customer experience innovations.</span>
				</td>
			</tr>
			<tr class="fourth-row" >
				<td colspan="2">
					<span class="fourth-row-tdspan-f">Research shows that 55% of consumers are willing to pay more for a guaranteed good experience.
					</span>
					<span class="fourth-row-tdspan-s" ><img src="email-second-img.png" style="width: 115px"></span>
				</td>
			</tr>
			<tr class="fifth-row">
				<td class="fifth-row-td" colspan="2">
					<span class="fifth-row-td-span-f">
						<img src="email-three-img.png" style="width: 115px">
					</span>
					<span class="fifth-row-td-span-s" > Of consumers are willing to pay more for an upgraded  experience.
					</span>
				</td>
			</tr>
			<tr class="sixth-row">
				<td class="sixth-row-td" colspan="2">
					<span class="sixth-row-td-span-f">Also 66% of consumerswho switched brands did so because of poor service.</span>
					<span class="sixth-row-td-span-s">
						<img src="email-four-img.png" style="width: 115px">
					</span>
				</td>
			</tr>
			<tr class="seventh-row">
				<td class="seventh-row-td" colspan="2">Signature CX is exemplified when your customer trusts your decisions to run his business and, or recommends you to his clients.</td>
			</tr>
			<tr class="eighth-row">
				<td class="eighth-row-td" colspan="2">
					<a href="http://www.enhancier.com/">
						<button>Click To WOW Your Customers</button>
					</a>
				</td>
			</tr>
			<tr style="background: #103844;">
				<td style="text-align: center;padding: 10px 0;" colspan="2">
					<span style="padding: 0 5px;">
						<a href="https://www.facebook.com/enhanciercx/">
							<img src="fb-logo.png" style="width: 9%;">
						</a>
					</span>
					<span style="padding: 0 5px;">
						<a href="https://twitter.com/Enhancier">
							<img src="Twitter-logo.png" style="width: 9%;">
						</a>
					</span>
					<span style="padding: 0 5px;">
						<a href="https://www.linkedin.com/company/10170368/">
							<img src="Linked-in-logo.png" style="width: 9%;">
						</a>
					</span>
					<span style="padding: 0 5px;">
						<a href="https://plus.google.com/u/0/108338417247978265767">
							<img src="G-plus-logo.png" style="width: 9%;">
						</a>
					</span>
					<span style="padding: 0 5px;">
						<a href="https://www.instagram.com/enhanciercx/">
							<img src="insta-logo.png" style="width: 9%;">
						</a>
					</span>
				</td>
			</tr>
			<tr style="background: #103844;">
				<td colspan="2" style="padding: 0 40px;text-align: center; color:white;">Enhancier CX Solutions Pvt Ltd| 503, Tower1, World Trade Center. Opp Eon Free Zone. Kharadi. Pune www.enhancier.com | 9899115493 | info@enhancier.com</td>
			</tr>
			</tbody>
		</table>
	</div>
</body>
</html>
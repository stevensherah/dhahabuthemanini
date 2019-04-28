<section>
        <style>
                .event-list {
                        list-style: none;
                        font-family: 'Lato', sans-serif;
                        margin: 0px;
                        padding: 0px;
                }
                .event-list > li {
                        background-color: rgb(255, 255, 255);
                        box-shadow: 0px 0px 5px rgb(51, 51, 51);
                        box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
                        padding: 0px;
                        margin: 0px 0px 20px;
                }
                .event-list > li > time {
                        display: inline-block;
                        width: 100%;
                        color: rgb(255, 255, 255);
                        background-color: rgb(197, 44, 102);
                        padding: 5px;
                        text-align: center;
                        text-transform: uppercase;
                }
                .event-list > li:nth-child(even) > time {
                        background-color: rgb(165, 82, 167);
                }
                .event-list > li > time > span {
                        display: none;
                }
                .event-list > li > time > .day {
                        display: block;
                        font-size: 40pt;
                        font-weight: 100;
                        line-height: 1;
                }
                .event-list > li time > .month {
                        display: block;
                        font-size: 18pt;
                        font-weight: 500;
                        line-height: 1;
                }
                .event-list > li time > .year {
                        display: block;
                        font-size: 24pt;
                        font-weight: 500;
                        line-height: 1;
                }
                .event-list > li > img {
                        width: 100%;
                }
                .event-list > li > .info {
                        padding-top: 5px;
                        text-align: center;
                }
                .event-list > li > .info > .title {
                        font-size: 17pt;
                        font-weight: 700;
                        margin: 0px;
                }
                .event-list > li > .info > .desc {
                        font-size: 13pt;
                        font-weight: 300;
                        margin: 0px;
                }
                .event-list > li > .info > ul,
                .event-list > li > .social > ul {
                        display: table;
                        list-style: none;
                        margin: 10px 0px 0px;
                        padding: 0px;
                        width: 100%;
                        text-align: center;
                        
                }
          
                @media (min-width: 768px) {
                        .event-list > li {
                                position: relative;
                                display: block;
                                width: 100%;
                                height: 120px;
                                padding: 0px;
                        }
                        .event-list > li > time,
                        .event-list > li > img  {
                                display: inline-block;
                        }
                        .event-list > li > time,
                        .event-list > li > img {
                                width: 120px;
                                float: left;
                        }
                        .event-list > li > .info {
                                background-color: rgb(245, 245, 245);
                                overflow: hidden;
                        }
                        .event-list > li > time,
                        .event-list > li > img {
                                width: 120px;
                                height: 120px;
                                padding: 0px;
                                margin: 0px;
                        }
                        .event-list > li > .info {
                                position: relative;
                                height: 120px;
                                text-align: left;
                                padding-right: 40px;
                        }	
                        .event-list > li > .info > .title, 
                        .event-list > li > .info > .desc {
                                padding: 0px 10px;
                        }
                        .event-list > li > .info > ul {
                                position: absolute;
                                left: 0px;
                                bottom: 0px;
                        }
                        .event-list > li > .social {
                                position: absolute;
                                top: 0px;
                                right: 0px;
                                display: block;
                                width: 40px;
                        }
               
                }
        </style>
			<div class="container">
                                <h1 class="text-center">Events</h1>
				<ul class="event-list">
					<li>
                                                        <time datetime="1881-05-19">
                                                                        <span class="day">19</span>
                                                                        <span class="month">Mayıs</span>
                                                                        <span class="year">1919</span>
                                                                        <span class="time">Tüm Gün</span>
                                                        </time>
                                                                
                                                        <img alt="ATATÜRK" src="http://www.rampartsofcivilization.com/wp-content/uploads/2011/02/MUSTAFA-KEMAL-ATATURK-150x150.jpg" />
                                                        <div class="info">
                                                                <h2 class="title">19 Mayıs</h2>
                                                                <p class="desc">Zafer Bayramı </p>
                                                                <a href="#" class="btn btn-warning">More Info</a>
                                                                <a href="#" class="btn btn-info">Register</a>
                                                        </div>
					</li>
				</ul>
			</div>
		
</section>

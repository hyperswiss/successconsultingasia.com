document.write('\
\
    <div class="grid_contact">\
        <div class="grid_form_items">\
        <form action="sendmail.php" id="myform" method="post" role="form">\
			<div class="alert alert-success alert-dismissible" id="success" role="alert" style="display:none">\
	 		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Thank you for contacting us</strong></div>\
			<div class="alert alert-warning alert-dismissible" id="errors" role="alert" style="display:none"></div>\
			<div style="margin-bottom: 25px;"></div>\
    				<div class="form-group">\
						<input type="text" class="form-control" name="fname" placeholder="First Name" required>\
					</div>\
					<div class="form-group">\
						<input type="text" class="form-control" name="lname" placeholder="Last Name" required>\
					</div>\
					<div class="form-group">\
						<input type="email" class="form-control" name="email" placeholder="Email" >\
					</div>\
					<div class="form-group">\
						<input type="text" class="form-control" name="subject" placeholder="Subject" >\
					</div>\
                    <div class="form-group">\
                    <textarea class="form-control" type="textarea" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>                   \
                    </div>                  \
\
        <button class="btn btn-primary" type="submit" id="submit" name="submit">Submit</button>\
        </form>\
        </div>\
\
        <div class="grid_countries">\
            <div class="card">\
                <div class="card-body">\
                    <img src="../img/rect843.png" class="card-img-top" alt="...">\
                    <div class="countries">\
                        <p><strong>Thailand - Myanmar</strong></p>\
                        <p><a class="email" href="mailto:thailand.admin@successconsultingasia.com">thailand.admin@successconsultingasia.com</a></p>\
                        <p><img class="icon" src="img/phone-solid.svg" alt="phone"> +66 901 625 166</p>\
                    </div>\
                    <div class="countries">\
                        <p><strong>Cambodia - Vietnam</strong></p>\
                        <p><a class="email" href="mailto:cambodia.admin@successconsultingasia.com">cambodia.admin@successconsultingasia.com</a></p>\
                        <p><img class="icon" src="img/phone-solid.svg" alt="phone"> +855 17 573 494</p>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>\
');

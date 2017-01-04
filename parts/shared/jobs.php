<!--<div id="jobs">
	<div class="main-container">
		<div id="bar">
			<div id="block-heading-container">
				<h3>Hiring Companies</h3>
			</div>
		</div>
		<div id="blocks-container" class="to-be-slid">
			<ul>
				<?php
				function sprint_r($var) {
					ob_start();
					print_r($var);
					$output=ob_get_contents();
					ob_end_clean();
					return $output;
				}
				$mydb = new wpdb('uncubed_dbuser','U;nNC6u(B63D!D4;4bas3','uncubed_wp','localhost');
					$rows = $mydb->get_results("SELECT count(t1.userId) AS cnt, t1.userId,t2.companyFunding,t2.isFeatured,t2.createDate,t2.companyHeadquarter,t2.CompanyLogo,t2.companyName,t2.companyUrl,t2.companyShortDescription,t2.noOfEmployee,t2.companyDescription,t1.jobAddress FROM job_detail as t1 INNER JOIN user_detail as t2 ON t1.userId=t2.userId where  t2.userStatus='Active' and t1.jobStatus='Active' and t2.userType='recruiter'  and (t2.companyHeadquarter like '%, NY' OR t2.companyHeadquarter like '%, nyc' OR t2.companyHeadquarter like '%, New York') GROUP BY t1.userId  ORDER BY t2.isFeatured,t2.companyname,t1.modifiedDate DESC LIMIT 6");
					file_put_contents("rows", sprint_r($rows));

				foreach ($rows as $row) :
				
					$city = $row->jobAddress;
					$pos = strpos($city, ",");
					$city = substr($city, 0, $pos);
					$logo = "http://uncubed.com/jobs/thumb.php?src=companyImages/";
					$logo .= $row->CompanyLogo;
					$logo .= "&z=0&w=110";
					$company = $row->companyName;
					$link = "http://uncubed.com/jobs/companies/";
					$link .= $company;
					$link = strtolower($link);
					$description = $row->companyShortDescription;

					?>
					<li class="block" id="company">
						<table>
							<tr>
								<td class="company-name" colspan="2">
									<h5><?php echo $company ?></h5>
								</td>
							</tr>
							<tr>
								<td class="company-city" colspan="2">
									<h6><?php echo $city ?></h6>
								</td>
							</tr>
							<tr>
								<td class="company-logo" >
									<div style="background: url('<?php echo $logo ?>') center center; background-size: contain; background-repeat: no-repeat;"></div>
								</td>
								<td class="company-link">
									<h5><a href="<?php echo $link ?>" alt="<?php echo $company ?>">See Jobs</a></h5>
								</td>
							</tr>
							<tr>
								<td class="company-description hidden" colspan="2">
									<div>
										<div>
											<span><?php echo $description ?></span>
										</div>
									</div>
								</td>
							</tr>
						</table>		
					</li>
					<?php
				endforeach;
				?>
			</ul>
		</div>
		<div class="see-more-link">
			<h5><a href="http://uncubed.com/jobs" alt="Uncubed Jobs" target="_blank">See All Jobs &rarr;</a></h5>
		</div>
	</div>
</div>-->
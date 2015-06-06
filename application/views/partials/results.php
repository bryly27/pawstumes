		<div class='row'>
			<ul class='pagination'>

<?php  
				for($i=1;$i<=ceil(count($all)/10);$i++)
				{ ?>
					<li id='<?= $i ?>'><a class='page_search' href='' alt='<?= $i ?>'><?= $i ?></a></li>
<?php		} ?>
			</ul>
		</div>


<?php  
			foreach($pets as $pet)
			{

				if($pet['file_type'] == 'photo')
				{ ?>
					<div class='pets'>
							<img src='<?= $pet['link']?>' alt='<?= $pet['description'] ?>'>
							<p><?= date("F d, Y", strtotime($pet['created_at'])) ?></p>
					</div>
<?php		}
				else
				{ ?>
					<div class='pets'>
						<iframe width='50%' height="45%" src="<?= $pet['link'] ?>" frameborder="0" allowfullscreen alt='<?= $pet['description'] ?>'></iframe>
						<p><?= date("F d, Y", strtotime($pet['created_at'])) ?></p>
					</div>
<?php		}
			} ?>
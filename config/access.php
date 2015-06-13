<?php
return array(
        // Hercules/FluxCP permissions for LCMS
	'modules' => array(
		'lcms' => array(
                        // LCMS personal content management pages
			'index'         => AccountLevel::NORMAL,
                        'edit'          => AccountLevel::NORMAL,
                        'update.form'   => AccountLevel::NORMAL,
                        'add.form'      => AccountLevel::NORMAL,
                        'delete.form'   => AccountLevel::NORMAL,
                        // LCMS content moderation page
                        'page'          => AccountLevel::LOWGM,   // Minimum level required to see the "Manage pages" menu
                        'module'        => AccountLevel::LOWGM,   // Minimum level required to see the "Manage modules" menu
                        'author'        => AccountLevel::HIGHGM,   // Minimum level required to see the "Manage authors" menu
		)
	)
)
?>
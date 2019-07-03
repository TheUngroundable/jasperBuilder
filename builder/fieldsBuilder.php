<?php



	$total_lines = round($creditlines_number / 10, 0, PHP_ROUND_HALF_UP) * 10;		

	//APPLICANT 1
	for($i = 1; $i <= $total_lines; $i++){
	?>
		<field name="AP1_LIAB_TYPE_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_MATURITY_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_PRIV_BUS_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_PRIV_FOREIGN_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_PURPOSE_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_STATUS_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_INTEREST_RATE_FIX_UNTIL_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_LIMIT_EXISTING_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_LIMIT_PROPOSED_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_INSTALLMENT_PM_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_INSTITUTE_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_INTEREST_RATE_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_ACC_NUM_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_CALC_ANNUITY_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_CREDIT_PRODUCT_<?php echo $i ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_HVBOTHER_<?php echo $i ?>" class="java.lang.String"/>
	<?php
	}

	//LINKED PARTNERS
	for($partner = 1; $partner <= $linked_partners; $partner++){
		for($i = 1; $i <= $total_lines; $i++){
		?>
			<field name="LP<?php echo $partner ?>_LIAB_MATURITY_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_STATUS_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_HVBOTHER_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_LIMIT_EXISTING_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_LIMIT_PROPOSED_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_PRIV_BUS_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_PURPOSE_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_SHARE_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_INSTALLMENT_PM_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_INSTITUTE_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_INTEREST_RATE_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_INTEREST_RATE_FIX_UNTIL_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_TYPE_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_ACC_NUM_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_CALC_ANNUITY_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_CREDIT_PRODUCT_<?php echo $i ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_FOREIGN_<?php echo $i ?>" class="java.lang.String"/>
		<?php
		}
	}


	$num_bands = round($creditlines_number / 10, 0, PHP_ROUND_HALF_UP);

	for($band = 0; $band < $num_bands; $band++){
	?>
		<field name="AP1_LIAB_CL_OVERFLOW_<?php echo $band ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_CL_TOTALS_<?php echo $band ?>" class="java.lang.String"/>
	<?php
	}

	for($partner = 1; $partner <= $linked_partners; $partner++){
		for($band = 0; $band < $num_bands; $band++){
		?>
			<field name="LP<?php echo $partner ?>_LIAB_CL_OVERFLOW_<?php echo $band ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_CL_TOTALS_<?php echo $band ?>" class="java.lang.String"/>
		<?php
		}
	}
?>
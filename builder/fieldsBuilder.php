<?php	
	//APPLICANT 1
	for($i = 1; $i <= $total_credit_lines; $i++){
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
		for($i = 1; $i <= $total_credit_lines; $i++){
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

	for($band = 0; $band < $num_credit_bands; $band++){
		?>
		<field name="AP1_LIAB_CL_OVERFLOW_<?php echo $band ?>" class="java.lang.String"/>
		<field name="AP1_LIAB_CL_TOTALS_<?php echo $band ?>" class="java.lang.String"/>
		<?php
	}

	for($partner = 1; $partner <= $linked_partners; $partner++){
		for($band = 0; $band < $num_credit_bands; $band++){
			?>
			<field name="LP<?php echo $partner ?>_LIAB_CL_OVERFLOW_<?php echo $band ?>" class="java.lang.String"/>
			<field name="LP<?php echo $partner ?>_LIAB_CL_TOTALS_<?php echo $band ?>" class="java.lang.String"/>
			<?php
		}
	}


	//asset details
	$detail_type = "OLD";
	for($ap = 1; $ap <= $applicants; $ap++){
		for($i = 1; $i <= $asset_details_lines; $i++){
			?>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_ADDR_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_APPL_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_CYEAR_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_FRN_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_LCHARGE_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_NARE_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_NETRENT_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_NFLATS_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_PROP_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_SQMLS_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_SQMPA_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_TYP_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_VBANK_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_VCUST_<?php echo $i ?>" class="java.lang.String"/>
			<?php
		}
		?>
		<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_VBANK_TOTAL" class="java.lang.String"/>
		<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_NETRENT_TOTAL" class="java.lang.String"/>
		<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_VCUST_TOTAL" class="java.lang.String"/>
		<?php
	}

	$detail_type = "NEW";
	for($ap = 1; $ap <= $applicants; $ap++){
		for($i = 1; $i <= $asset_details_lines; $i++){
			?>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_ADDR_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_APPL_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_CYEAR_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_FRN_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_LCHARGE_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_NARE_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_NETRENT_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_NFLATS_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_PROP_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_SQMLS_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_SQMPA_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_TYP_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_VBANK_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_VCUST_<?php echo $i ?>" class="java.lang.String"/>
			<?php
		}
		?>
		<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_VBANK_TOTAL" class="java.lang.String"/>
		<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_NETRENT_TOTAL" class="java.lang.String"/>
		<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type?>_VCUST_TOTAL" class="java.lang.String"/>
		<?php
	}

	$detail_type = "OLD";
	for($ap = 1; $ap <= $applicants; $ap++){
		for($band = 0; $band < $num_details_bands; $band++){
		?>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_TOTALS_<?php echo $band ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_OVERFLOW_<?php echo $band ?>" class="java.lang.String"/>	
		<?php
		}
	}
	
	$detail_type = "NEW";
	for($ap = 1; $ap <= $applicants; $ap++){
		for($band = 0; $band < $num_details_bands; $band++){
		?>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_TOTALS_<?php echo $band ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_OVERFLOW_<?php echo $band ?>" class="java.lang.String"/>	
		<?php
		}
	}

?>
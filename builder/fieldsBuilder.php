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
	for($ap = 1; $ap <= $applicants; $ap++){
		for($i = 1; $i <= $asset_details_lines; $i++){
			?>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_ADDR_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_APPL_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_CYEAR_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_FRN_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_LCHARGE_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_NARE_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_NETRENT_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_NFLATS_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_PROP_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_SQMLS_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_SQMPA_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_TYP_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_VBANK_<?php echo $i ?>" class="java.lang.String"/>
			<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_VCUST_<?php echo $i ?>" class="java.lang.String"/>
			<?php
		}
		?>
		<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_VBANK_TOTAL" class="java.lang.String"/>
		<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_NETRENT_TOTAL" class="java.lang.String"/>
		<field name="AP<?php echo $ap ?>_ASSETS_DTLS_OLD_VCUST_TOTAL" class="java.lang.String"/>
		<?php
	}
?>
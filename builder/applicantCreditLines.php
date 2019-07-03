
<?php
$range = 1;
for($band = 0; $band < $num_bands; $band++){
	
?>
<!-- AP1 BAND NUMBER <?php echo $band ?>-->
<band height="769">
	<printWhenExpression><![CDATA[EXACT($F{AP1_LIAB_CL_OVERFLOW_<?php echo $band ?>}, "Y")]]></printWhenExpression>
	<frame>
		<reportElement x="0" y="0" width="555" height="750" uuid="bdf1dcfc-b40c-4147-a34a-7eb7a3279ba6"/>
		<!-- BAND CONTENT -->
		<frame>
			<reportElement stretchType="RelativeToTallestObject" mode="Transparent" x="0" y="115" width="555" height="625" uuid="72aa67cb-fc25-46b2-9e95-043656604041"/>
			<box>
				<pen lineWidth="0.5"/>
			</box>
			<textField isBlankWhenNull="true">
				<reportElement x="9" y="41" width="131" height="19" uuid="b9741ca2-e1a6-43ad-9c70-c04a54875a8a"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textElement>
					<font size="8"/>
				</textElement>
				<textFieldExpression><![CDATA[$F{LIAB_NDG_NUMBER_AP1}]]></textFieldExpression>
			</textField>
			<textField isBlankWhenNull="true">
				<reportElement x="141" y="41" width="401" height="19" uuid="945ca79e-9fe7-42f7-840f-1e884dd1264a"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textElement>
					<font size="8"/>
				</textElement>
				<textFieldExpression><![CDATA[$F{LIAB_NDG_NAME_AP1}]]></textFieldExpression>
			</textField>
			<!-- AP1 I or PB-->
			<frame>
				<reportElement x="14" y="86" width="525" height="350" isRemoveLineWhenBlank="true" uuid="b9e25f6d-dbdf-47c0-8dec-fd1a924fe68a">
					<printWhenExpression><![CDATA[OR(EXACT($F{KVR_CUSTOMER_CLASSIFICATION},"I"),EXACT($F{KVR_CUSTOMER_CLASSIFICATION},"PB"))]]></printWhenExpression>
				</reportElement>
				<!-- SECOND BOX -->
				<frame>
					<reportElement x="0" y="186" width="525" height="164" uuid="4d659f34-5ad0-4c01-9c92-3dba9ba3330b"/>
					<!-- HEADING -->	
					<frame>
						<reportElement x="0" y="0" width="525" height="15" uuid="bb951df8-4b29-4b5f-845b-4f7b457cfd56"/>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="0" y="0" width="65" height="15" backcolor="#E0E0E0" uuid="0b0faadb-ecae-48ca-ac2b-e3bc01b7d18e"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.MATURITY}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="65" y="0" width="65" height="15" backcolor="#E0E0E0" uuid="e9b14ac8-de2f-4825-80e1-eda3fb89b987"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INTEREST_RATE}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="130" y="0" width="65" height="15" backcolor="#E0E0E0" uuid="d83de0a8-73ba-4db0-8fc2-1c3fe8e15af5"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INTEREST_RATE_FIX_UNTIL}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="195" y="0" width="65" height="15" backcolor="#E0E0E0" uuid="063213c5-29f0-450a-b61c-ad393ea757e1"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.TYPE}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="260" y="0" width="65" height="15" backcolor="#E0E0E0" uuid="adfab26f-8825-4310-a7e2-374debd69e0c"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.PURPOSE}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="325" y="0" width="65" height="15" backcolor="#E0E0E0" uuid="c81762d4-833c-4cf0-8f23-f681103ad111"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.PRIVATE_BUSINESS}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="390" y="0" width="65" height="15" backcolor="#E0E0E0" uuid="690e76db-ad1a-4dc2-a5e4-7b276acdc2ee"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.CALC_ANNUITY}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="455" y="0" width="70" height="15" backcolor="#E0E0E0" uuid="c564fce4-5086-45dc-9005-575ac0e557fc"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.HVB_OTHER}]]></textFieldExpression>
						</textField>
					</frame>
					<!-- SECOND BOX CREDIT LINES -->
					<frame>
						<reportElement positionType="Float" x="0" y="15" width="525" height="150" uuid="cfc79d08-2599-4f10-b1bc-cd5954c577bb"/>
						<?php 
						for($i = $range; $i<=($range+9); $i++){
							$y = 15 * (($i - 1) % 10);
						?>
						<!-- CREDIT LINE -->
						<frame>
							<reportElement x="0" y="<?php echo $y?>" width="525" height="15" isRemoveLineWhenBlank="true" uuid="e9bc6dd4-2f2f-4571-9621-0b0678165e91"/>
							<textField isBlankWhenNull="true">
								<reportElement x="195" y="0" width="65" height="15" uuid="fd9ac6fa-d310-4bf1-bb41-06af27319ad5"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_TYPE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="260" y="0" width="65" height="15" uuid="2f0a7545-023b-4ccc-b798-0090f40c2b23"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_PURPOSE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="65" y="0" width="65" height="15" uuid="5fc14983-6f27-4573-9b82-30f6f047bf7c"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INTEREST_RATE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="0" y="0" width="65" height="15" uuid="6ace0127-48de-4484-8564-eeb06f9834a6"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_MATURITY_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="325" y="0" width="65" height="15" uuid="86c282af-73ff-40b1-bb3d-f38f470622d0"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_PRIV_BUS_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="390" y="0" width="65" height="15" uuid="6353b59c-66a8-46f3-a0ea-bf97b86bddb3"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_CALC_ANNUITY_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="130" y="0" width="65" height="15" uuid="645ce294-031d-4bbb-84b2-7dc8adbfdf55"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INTEREST_RATE_FIX_UNTIL_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="455" y="0" width="70" height="15" uuid="f8536cc9-0194-4486-a98b-0fb16b76a891"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_HVBOTHER_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
						</frame>
						<?php
							}
						?>
					</frame>
				</frame>
				<!-- FIRST BOX -->
				<frame>
					<reportElement x="0" y="0" width="525" height="164" uuid="999a9419-d37b-4a70-9bb5-31f941bceca9"/>
					<!-- HEADING -->
					<frame>
						<reportElement positionType="Float" x="0" y="0" width="525" height="15" uuid="f0b0d6d9-5a73-475e-a747-ee6848cf4c75"/>
						<box padding="0"/>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ContainerHeight" mode="Opaque" x="0" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="9759d281-7776-4941-95af-22e3c97090f3"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.ACCOUNT_NUMBER}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ContainerHeight" mode="Opaque" x="75" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="5fa7032d-00c3-4296-952f-1026d1d49e31"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INSTITUTE}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ContainerHeight" mode="Opaque" x="150" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="2c3c64d5-489b-4c86-b59a-72e0c9d80489"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.CREDIT_PRODUCT}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ContainerHeight" mode="Opaque" x="225" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="be01ab63-9d10-4833-b788-dbfa39a50ba1"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.LIMIT_EXISTING}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ContainerHeight" mode="Opaque" x="300" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="18f4f12e-6c05-4e9e-819a-51f71870a27d"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.LIMIT_PROPOSED}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ContainerHeight" mode="Opaque" x="375" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="fc91e923-1751-4027-aa65-6298d5d5c61e"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.STATUS}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ContainerHeight" mode="Opaque" x="450" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="bf391d48-da4f-433b-8678-20fae73a04f0"/>
							<box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INSTALLMENT_PM}]]></textFieldExpression>
						</textField>
					</frame>
					<!-- FIRST BOX CREDIT LINES -->
					<frame>
						<reportElement positionType="Float" x="0" y="15" width="525" height="150" uuid="2c7ea63f-e0f4-41da-9862-2ada2dba11fb"/>
						<?php 
						for($i = $range; $i<=($range+9); $i++){
							$y = 15 * (($i - 1) % 10);
						?>
						<!-- CREDIT LINE -->
						<frame>
							<reportElement x="0" y="<?php echo $y?>" width="525" height="15" isRemoveLineWhenBlank="true" uuid="03bb7618-360e-4c38-96fe-3837d6c11813"/>
							<textField isBlankWhenNull="true">
								<reportElement x="0" y="0" width="75" height="15" uuid="22c6ef03-bb72-4c13-b5a8-c01cdbfbd98e"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_ACC_NUM_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="75" y="0" width="75" height="15" uuid="54cbd1e9-481c-47a1-b8ca-08bb66e5cd76"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INSTITUTE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="150" y="0" width="75" height="15" uuid="179bcfcb-46ba-47d2-840c-a715f3c3e7f7"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_CREDIT_PRODUCT_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="225" y="0" width="75" height="15" uuid="d6e7fb15-56cd-4135-a245-e0f157244aeb"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_LIMIT_EXISTING_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="450" y="0" width="75" height="15" uuid="659b7a17-61e6-4c26-b07e-47e7c478e7c3"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INSTALLMENT_PM_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="300" y="0" width="75" height="15" uuid="76e8819d-917a-4cd0-b164-a5bfad1ac7c8"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_LIMIT_PROPOSED_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="375" y="0" width="75" height="15" uuid="5f89fc30-362d-4699-adc4-83d0d6ec6e89"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_STATUS_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
						</frame>
						<?php
							}
						?>
					</frame>
				</frame>
			</frame>
			<!-- AP1 COMP -->
			<frame>
				<reportElement x="14" y="86" width="525" height="350" isRemoveLineWhenBlank="true" uuid="75c4faba-d500-4af1-be9b-47e507726c28">
					<printWhenExpression><![CDATA[EXACT($F{KVR_CUSTOMER_CLASSIFICATION},"C")]]></printWhenExpression>
				</reportElement>
				<frame>
					<reportElement x="0" y="0" width="525" height="165" uuid="a78cf3b5-55d6-450b-a008-4343f642459d"/>
					<!-- HEADING -->
					<frame>
						<reportElement x="0" y="0" width="525" height="15" uuid="afacf6f0-72eb-4e98-ad66-eda8c71110ab"/>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="75" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="1c9326cc-4f9e-40ce-9e0e-12cdb2f3afb8"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INSTITUTE}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="0" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="e8ec23cf-4f72-4ea4-b146-21514bde88c6"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.ACCOUNT_NUMBER}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="150" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="caf5f8c5-35c2-4a57-a392-e87b1c817518"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.CREDIT_PRODUCT}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="450" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="42fe64be-c52b-4bb2-a33f-5138b7975ce9"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INSTALLMENT_PM}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="375" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="29ff2d65-876d-4834-953c-175cccd3da84"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.STATUS}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="225" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="7f2bc1d5-1bb7-4b9d-b1a8-5dd3f5a730c7"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.LIMIT_EXISTING}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="300" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="a2d053d0-7cb2-4595-91ee-2aa982a59e2f"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.LIMIT_PROPOSED}]]></textFieldExpression>
						</textField>
					</frame>
					<!-- FIRST BOX CREDIT LINES -->		
					<frame>
						<reportElement positionType="Float" x="0" y="15" width="525" height="150" uuid="858a9d05-d6d5-407d-8ef3-c8a16efcfb5f"/>
						<?php 
						for($i = $range; $i<=($range+9); $i++){
							$y = 15 * (($i - 1) % 10);
						?>
						<!-- CREDIT LINE -->				
						<frame>
							<reportElement x="0" y="<?php echo $y ?>" width="525" height="15" uuid="2316de78-f97d-4810-aef3-009aad0a5664"/>
							<textField isBlankWhenNull="true">
								<reportElement x="0" y="0" width="75" height="15" uuid="bf1020ba-5a47-4032-b47a-2a38370e6bb9"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_ACC_NUM_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="75" y="0" width="75" height="15" uuid="b1a3222e-80ea-4a6d-9060-e674ff680619"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INSTITUTE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="150" y="0" width="75" height="15" uuid="b70a9283-12f8-41ff-9183-55b0586b9a03"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_CREDIT_PRODUCT_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="225" y="0" width="75" height="15" uuid="3a73d69a-fbae-43c5-bec9-1f9de125c812"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_LIMIT_EXISTING_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="450" y="0" width="75" height="15" uuid="ee19a936-b101-4dbe-ae6f-23df6fc4644b"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INSTALLMENT_PM_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="300" y="0" width="75" height="15" uuid="b7f14bec-9772-4be8-b850-88e95ded6eb2"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_LIMIT_PROPOSED_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="375" y="0" width="75" height="15" uuid="a103c8f6-a214-4c27-aa62-5fe835da88ff"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_STATUS_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
						</frame>
						<?php
						}
						?>
					</frame>
				</frame>
				<frame>
					<reportElement x="0" y="186" width="525" height="165" uuid="276a48a9-3dd0-4084-86bc-2b69394f3645"/>
					<!-- HEADING -->
					<frame>
						<reportElement x="0" y="0" width="525" height="15" uuid="5cb30080-95aa-4518-bb3e-9a302eab4ffc"/>
						<textField>
							<reportElement mode="Opaque" x="225" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="6ef2df09-eea8-4cf3-b08f-8b5a0be6fd05"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Middle">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.TYPE}]]></textFieldExpression>
						</textField>
						<textField>
							<reportElement mode="Opaque" x="450" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="28f9731a-019d-4d90-bec7-cfceb7dd32e7"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Middle">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.HVB_OTHER}]]></textFieldExpression>
						</textField>
						<textField>
							<reportElement mode="Opaque" x="375" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="91481eb5-9e25-4b67-9a8c-dd6ebde6bc35"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Middle">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.PRIVATE_BUSINESS}]]></textFieldExpression>
						</textField>
						<textField>
							<reportElement mode="Opaque" x="150" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="ff7b4f9e-aa2f-4e03-b329-d7a9094039bc"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Middle">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INTEREST_RATE_FIX_UNTIL}]]></textFieldExpression>
						</textField>
						<textField>
							<reportElement mode="Opaque" x="300" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="fd60afc4-7692-4aa6-9586-7e34eaca4660"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Middle">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.PURPOSE}]]></textFieldExpression>
						</textField>
						<textField>
							<reportElement mode="Opaque" x="0" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="52fa77ef-9ec4-461c-a4df-a869ad4653c1"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Middle">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.MATURITY}]]></textFieldExpression>
						</textField>
						<textField>
							<reportElement mode="Opaque" x="75" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="33552e0d-2b93-435f-b3b9-7923a0a15085"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Middle">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INTEREST_RATE}]]></textFieldExpression>
						</textField>
					</frame>
					<!-- SECOND BOX CREDIT LINES -->
					<frame>
						<reportElement positionType="Float" x="0" y="15" width="525" height="150" uuid="827e282a-5acd-495e-9762-c168ddc4a85c"/>
						<?php 
						for($i = $range; $i<=($range+9); $i++){
							$y = 15 * (($i - 1) % 10);
						?>
						<!-- CREDIT LINE -->
						<frame>
							<reportElement x="0" y="<?php echo $y ?>" width="525" height="15" uuid="49dc01f8-41b8-42aa-9ef3-6d3a393648a6"/>
							<textField isBlankWhenNull="true">
								<reportElement x="225" y="0" width="75" height="15" uuid="3a7cb696-95f7-4c2c-b298-0df2a9f588c3"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_TYPE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="300" y="0" width="75" height="15" uuid="61f3e86d-77e7-45aa-beec-853a6dcd5320"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_PURPOSE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="75" y="0" width="75" height="15" uuid="6224d613-f451-4ed7-8fda-f29aeb50e496"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INTEREST_RATE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="0" y="0" width="75" height="15" uuid="30d55432-c119-49e9-a3db-df94c8ef915c"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_MATURITY_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="375" y="0" width="75" height="15" uuid="5ea40ba6-f779-4d99-af1f-e55871c0d7ea"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_PRIV_BUS_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="150" y="0" width="75" height="15" uuid="53f5c38e-c7e7-46f4-8939-4a025152ca82"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INTEREST_RATE_FIX_UNTIL_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="450" y="0" width="75" height="15" uuid="37a2eb5b-18ea-4173-8617-e5a70800c754"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_HVBOTHER_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
						</frame>
						<?php 
						}
						?>
					</frame>
				</frame>
			</frame>
			<!-- AP1 NRI -->
			<frame>
				<reportElement x="14" y="86" width="525" height="350" isRemoveLineWhenBlank="true" uuid="4678b0fe-2356-42eb-88ee-cc9700743804">
					<printWhenExpression><![CDATA[EXACT($F{KVR_CUSTOMER_CLASSIFICATION},"NRI")]]></printWhenExpression>
				</reportElement>
				<frame>
					<reportElement x="0" y="0" width="525" height="165" uuid="1c944b8b-982d-4e8b-baf5-4ee23e8364ba"/>
					<!-- HEADING -->
					<frame>
						<reportElement x="0" y="0" width="525" height="15" uuid="e314d372-84c6-4022-8b1d-281facdd5c05"/>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="75" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="6bb2e691-4380-4b99-b4b9-8e2c49737d63"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INSTITUTE}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="0" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="8b47c41c-6a4b-4e16-b06d-a04c4f789030"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.ACCOUNT_NUMBER}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="150" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="863abaf2-646f-4abe-81a4-e9b4e4768240"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.CREDIT_PRODUCT}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="450" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="a86a1e34-7a54-4710-b45a-fbf1a9463eb4"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INSTALLMENT_PM}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="375" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="68149f27-d316-4f50-bd97-c30dc6fa13df"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.STATUS}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="225" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="cfad9d6e-48dd-44ff-a009-8598bc5ab5b6"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.LIMIT_EXISTING}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="300" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="34fb9242-e149-4468-867b-b2069ce651df"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.LIMIT_PROPOSED}]]></textFieldExpression>
						</textField>
					</frame>
					<frame>
						<reportElement positionType="Float" x="0" y="15" width="525" height="150" uuid="a89fa122-4faa-428b-a5ff-5ae58c334a45"/>
						<?php 
						for($i = $range; $i<=($range+9); $i++){
							$y = 15 * (($i - 1) % 10);
						?>
						<frame>
							<reportElement x="0" y="<?php echo $y ?>" width="525" height="15" uuid="a0349add-14eb-4510-b156-7fa8a964ca9f"/>
							<textField isBlankWhenNull="true">
								<reportElement x="0" y="0" width="75" height="15" uuid="f1e5c276-2161-414d-90db-d913f8e121f4"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_ACC_NUM_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="75" y="0" width="75" height="15" uuid="a161935a-c1e4-4bd2-9490-8eba8fdf5aa1"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INSTITUTE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="150" y="0" width="75" height="15" uuid="4f5633e3-1e28-4f00-80d2-721b08971162"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_CREDIT_PRODUCT_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="225" y="0" width="75" height="15" uuid="5b5ae110-5cbd-4766-952b-7537d725ed8c"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_LIMIT_EXISTING_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="450" y="0" width="75" height="15" uuid="80173585-c2af-43c6-b2e4-caf24e81bcd0"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INSTALLMENT_PM_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="300" y="0" width="75" height="15" uuid="700ddd14-97ca-40da-8175-8d450379189e"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_LIMIT_PROPOSED_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="375" y="0" width="75" height="15" uuid="9c64a21b-11fc-46b2-8c98-d15b56f53b1a"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_STATUS_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
						</frame>
						<?php
						}
						?>	
					</frame>
				</frame>
				<frame>
					<reportElement x="0" y="186" width="525" height="165" uuid="9870e562-732a-4ee1-8220-6cfc2d28f89d"/>
					<!-- HEADING -->	
					<frame>
						<reportElement x="0" y="0" width="525" height="15" uuid="4d265e0b-ca35-4d57-86b8-6bfeed0a05b6"/>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="150" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="3c090d97-8201-4800-8582-7d13b655e854"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INTEREST_RATE_FIX_UNTIL}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="450" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="cbf415bf-c593-4506-bbfd-2f136bf80274"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.HVB_OTHER}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="300" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="c4f3016b-30bd-4bf5-a557-7ed8fe831417"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.PURPOSE}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="375" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="bf3a28cc-ad5f-4dff-84fa-3ebe26b77d84"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.FOREIGN}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="75" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="8e2300b9-330f-4f07-bf28-6d4410ad5b73"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INTEREST_RATE}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="225" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="d38bc611-6d13-4202-b7e5-749dfc547f46"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.TYPE}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="0" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="6be5fdde-faf7-4ef7-9971-a881abace5da"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.MATURITY}]]></textFieldExpression>
						</textField>
					</frame>
					<frame>
						<reportElement positionType="Float" x="0" y="15" width="525" height="150" uuid="8240c997-9ec2-4a4f-8c83-604a89f4b7cc"/>
						<?php 
						for($i = $range; $i<=($range+9); $i++){
							$y = 15 * (($i - 1) % 10);
						?>
						<frame>
							<reportElement x="0" y="<?php echo $y ?>" width="525" height="15" uuid="72dd0b0b-b680-443c-ace4-7912834083ee"/>
							<textField isBlankWhenNull="true">
								<reportElement x="225" y="0" width="75" height="15" uuid="4bfe5f6d-64e8-4620-95ac-ee49a9b5a4e3"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_TYPE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="300" y="0" width="75" height="15" uuid="0f2fc450-ba3e-446b-a649-2a362bfd8562"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_PURPOSE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="75" y="0" width="75" height="15" uuid="4910f739-5d1d-4cbf-9948-bd7d39021b19"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INTEREST_RATE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="0" y="0" width="75" height="15" uuid="bc258d9a-2f72-4d3d-85c4-8a9bf6a316d1"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_MATURITY_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="375" y="0" width="75" height="15" uuid="6957e738-4c2c-4850-bcad-02973646037b"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_PRIV_FOREIGN_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="150" y="0" width="75" height="15" uuid="08b98919-125f-4f2d-8243-41b7430dd640"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_INTEREST_RATE_FIX_UNTIL_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="450" y="0" width="75" height="15" uuid="b814b99d-443f-4f0a-bab3-493570269bd4"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{AP1_LIAB_HVBOTHER_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
						</frame>
						<?php
						}
						?>
					</frame>
				</frame>
			</frame>
			<!-- Totals -->
			<frame>
				<reportElement positionType="Float" x="18" y="461" width="390" height="48" uuid="93585e2f-8e17-47c7-94e5-a5e381fb79dd">
					<printWhenExpression><![CDATA[EXACT($F{AP1_LIAB_CL_TOTALS_<?php echo $band ?>}, "Y")]]></printWhenExpression>
				</reportElement>
				<textField isBlankWhenNull="true">
					<reportElement x="165" y="12" width="75" height="12" isRemoveLineWhenBlank="true" uuid="82e23161-5346-46fd-ac76-b2e60ed35426">
						<printWhenExpression><![CDATA[EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "NRI")]]></printWhenExpression>
					</reportElement>
					<box rightPadding="2">
						<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					</box>
					<textElement textAlignment="Right" verticalAlignment="Middle">
						<font size="8"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{AP1_LIAB_TOTAL_LIMIT_EXISTING}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="240" y="36" width="75" height="12" isRemoveLineWhenBlank="true" uuid="b80484c8-5389-4416-ba2a-3a3686bfd000">
						<printWhenExpression><![CDATA[OR(EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "PB"),EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "C"))]]></printWhenExpression>
					</reportElement>
					<box rightPadding="2">
						<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					</box>
					<textElement textAlignment="Right" verticalAlignment="Middle">
						<font size="8"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{AP1_LIAB_TOTAL_LIMIT_PROPOSED_BSN}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="165" y="24" width="75" height="12" isRemoveLineWhenBlank="true" uuid="7e9e17ec-ccc5-4fa4-8f0a-15bd141b724b">
						<printWhenExpression><![CDATA[OR(EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "PB"),EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "I"))]]></printWhenExpression>
					</reportElement>
					<box rightPadding="2">
						<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					</box>
					<textElement textAlignment="Right" verticalAlignment="Middle">
						<font size="8"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{AP1_LIAB_TOTAL_LIMIT_EXISTING_PVT}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="165" y="36" width="75" height="12" isRemoveLineWhenBlank="true" uuid="538afd0b-5c6f-4be4-840f-42b9f1bb467d">
						<printWhenExpression><![CDATA[OR(EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "PB"),EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "C"))]]></printWhenExpression>
					</reportElement>
					<box rightPadding="2">
						<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					</box>
					<textElement textAlignment="Right" verticalAlignment="Middle">
						<font size="8"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{AP1_LIAB_TOTAL_LIMIT_EXISTING_BSN}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="240" y="12" width="75" height="12" isRemoveLineWhenBlank="true" uuid="d9977922-4bcc-4502-a28c-317e46dff632">
						<printWhenExpression><![CDATA[EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "NRI")]]></printWhenExpression>
					</reportElement>
					<box rightPadding="2">
						<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					</box>
					<textElement textAlignment="Right" verticalAlignment="Middle">
						<font size="8"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{AP1_LIAB_TOTAL_LIMIT_PROPOSED}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="240" y="24" width="75" height="12" isRemoveLineWhenBlank="true" uuid="075181fc-90d1-4cba-a5e7-ab4612ef82e1">
						<printWhenExpression><![CDATA[OR(EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "PB"),EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "I"))]]></printWhenExpression>
					</reportElement>
					<box rightPadding="2">
						<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					</box>
					<textElement textAlignment="Right" verticalAlignment="Middle">
						<font size="8"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{AP1_LIAB_TOTAL_LIMIT_PROPOSED_PVT}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="315" y="12" width="75" height="12" isRemoveLineWhenBlank="true" uuid="be2a7677-94a1-459c-973e-5d393d951ce6">
						<printWhenExpression><![CDATA[EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "NRI")]]></printWhenExpression>
					</reportElement>
					<box rightPadding="2">
						<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					</box>
					<textElement textAlignment="Right" verticalAlignment="Middle">
						<font size="8"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{AP1_LIAB_TOTAL_INSTALLMENT_PM}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="315" y="24" width="75" height="12" isRemoveLineWhenBlank="true" uuid="4db867b4-2705-4e19-a939-43563f730735">
						<printWhenExpression><![CDATA[OR(EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "PB"),EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "I"))]]></printWhenExpression>
					</reportElement>
					<box rightPadding="2">
						<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					</box>
					<textElement textAlignment="Right" verticalAlignment="Middle">
						<font size="8"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{AP1_LIAB_TOTAL_INSTALLMENT_PM_PVT}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="315" y="36" width="75" height="12" isRemoveLineWhenBlank="true" uuid="a2567c7e-54e2-4994-9eb9-76ec7a1c3cb6">
						<printWhenExpression><![CDATA[OR(EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "PB"),EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "C"))]]></printWhenExpression>
					</reportElement>
					<box rightPadding="2">
						<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
						<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					</box>
					<textElement textAlignment="Right" verticalAlignment="Middle">
						<font size="8"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{AP1_LIAB_TOTAL_INSTALLMENT_PM_BSN}]]></textFieldExpression>
				</textField>
				<textField>
					<reportElement mode="Opaque" x="165" y="0" width="75" height="12" backcolor="#E0E0E0" uuid="0bd56ea3-287c-48a1-8bd1-26d2b5a4caf3"/>
					<box>
						<topPen lineWidth="1.0"/>
						<leftPen lineWidth="1.0"/>
						<bottomPen lineWidth="1.0"/>
						<rightPen lineWidth="1.0"/>
					</box>
					<textElement textAlignment="Center" verticalAlignment="Middle">
						<font size="8" isBold="true"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.LIMIT_EXISTING}]]></textFieldExpression>
				</textField>
				<textField>
					<reportElement mode="Opaque" x="240" y="0" width="75" height="12" backcolor="#E0E0E0" uuid="1cf6f65c-5920-41dc-9317-92f169651404"/>
					<box>
						<topPen lineWidth="1.0"/>
						<leftPen lineWidth="1.0"/>
						<bottomPen lineWidth="1.0"/>
						<rightPen lineWidth="1.0"/>
					</box>
					<textElement textAlignment="Center" verticalAlignment="Middle">
						<font size="8" isBold="true"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.LIMIT_PROPOSED}]]></textFieldExpression>
				</textField>
				<textField>
					<reportElement mode="Opaque" x="315" y="0" width="75" height="12" backcolor="#E0E0E0" uuid="350303d9-ff2a-40aa-99a7-897cae478b9d"/>
					<box>
						<topPen lineWidth="1.0"/>
						<leftPen lineWidth="1.0"/>
						<bottomPen lineWidth="1.0"/>
						<rightPen lineWidth="1.0"/>
					</box>
					<textElement textAlignment="Center" verticalAlignment="Middle">
						<font size="8" isBold="true"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.INSTALLMENT_PM}]]></textFieldExpression>
				</textField>
				<textField>
					<reportElement mode="Opaque" x="0" y="12" width="165" height="12" backcolor="#E0E0E0" uuid="7b4f14d6-7abe-46eb-8ff5-8f1acb27e8a3">
						<printWhenExpression><![CDATA[EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "NRI")]]></printWhenExpression>
					</reportElement>
					<box leftPadding="2">
						<topPen lineWidth="1.0"/>
						<leftPen lineWidth="1.0"/>
						<bottomPen lineWidth="1.0"/>
						<rightPen lineWidth="1.0"/>
					</box>
					<textElement textAlignment="Left" verticalAlignment="Middle">
						<font size="8" isBold="true"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.TOTAL_AMOUNT}]]></textFieldExpression>
				</textField>
				<textField>
					<reportElement mode="Opaque" x="0" y="24" width="165" height="12" backcolor="#E0E0E0" uuid="8ee69d6d-7642-4023-9bf4-c0d72e158ba8">
						<printWhenExpression><![CDATA[OR(EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "PB"),EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "I"))]]></printWhenExpression>
					</reportElement>
					<box leftPadding="2">
						<topPen lineWidth="1.0"/>
						<leftPen lineWidth="1.0"/>
						<bottomPen lineWidth="1.0"/>
						<rightPen lineWidth="1.0"/>
					</box>
					<textElement textAlignment="Left" verticalAlignment="Middle">
						<font size="8" isBold="true"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.TOTAL_AMOUNT_PRIVATE}]]></textFieldExpression>
				</textField>
				<textField>
					<reportElement mode="Opaque" x="0" y="36" width="165" height="12" backcolor="#E0E0E0" uuid="29f81b6d-e693-42cb-94bf-430ab93e178c">
						<printWhenExpression><![CDATA[OR(EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "PB"),EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "C"))]]></printWhenExpression>
					</reportElement>
					<box leftPadding="2">
						<topPen lineWidth="1.0"/>
						<leftPen lineWidth="1.0"/>
						<bottomPen lineWidth="1.0"/>
						<rightPen lineWidth="1.0"/>
					</box>
					<textElement textAlignment="Left" verticalAlignment="Middle">
						<font size="8" isBold="true"/>
					</textElement>
					<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.TOTAL_AMOUNT_BUSINESS}]]></textFieldExpression>
				</textField>
			</frame>
			<!-- Additional Customer Infos -->
			<textField>
				<reportElement x="11" y="6" width="526" height="21" uuid="34508d7b-0385-4dc8-aa91-240b125f5c75"/>
				<textFieldExpression><![CDATA[$F{PRINTOUT.KVR_APPLICANT_1}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement mode="Opaque" x="141" y="23" width="401" height="18" backcolor="#E0E0E0" uuid="ff33b61e-3d8d-4117-ae9c-346b899eab7f"/>
				<box>
					<topPen lineWidth="1.0"/>
					<rightPen lineWidth="1.0"/>
				</box>
				<textElement>
					<font size="8"/>
				</textElement>
				<textFieldExpression><![CDATA[$F{PRINTOUT.CUSTOMER_NAME}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement mode="Opaque" x="9" y="23" width="131" height="18" backcolor="#E0E0E0" uuid="06243e2d-e81d-4722-b0d7-ba6dd07dd7ea"/>
				<box>
					<topPen lineWidth="1.0"/>
					<rightPen lineWidth="1.0"/>
				</box>
				<textElement>
					<font size="8"/>
				</textElement>
				<textFieldExpression><![CDATA[$F{PRINTOUT.NDG}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement x="12" y="71" width="100" height="14" uuid="e3a3d1b0-aea6-45f8-98ac-57a336713bf6"/>
				<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.CREDIT_LINES}]]></textFieldExpression>
			</textField>
		</frame>

		<!-- BAND HEADING -->
		<frame>
			<reportElement x="0" y="0" width="555" height="114" uuid="b016e232-5c21-4365-b295-37e7436be2d3"/>
			<textField isBlankWhenNull="true">
				<reportElement x="1" y="47" width="269" height="14" uuid="1e1c3d5c-022f-4343-9aca-4c81005fb57c"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textFieldExpression><![CDATA[$F{GOR_NUMBER}]]></textFieldExpression>
			</textField>
			<textField isBlankWhenNull="true">
				<reportElement x="286" y="47" width="269" height="14" uuid="0bfdd925-d109-47a0-b0fb-c5d1d62b8cf9"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textFieldExpression><![CDATA[$F{GOR_NAME}]]></textFieldExpression>
			</textField>
			<textField isBlankWhenNull="true">
				<reportElement x="1" y="84" width="269" height="14" uuid="5e535852-6374-489b-952d-d0a5cc27782c"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textFieldExpression><![CDATA[$F{NDG_NUMBER}]]></textFieldExpression>
			</textField>
			<textField isBlankWhenNull="true">
				<reportElement x="286" y="84" width="269" height="14" uuid="ccf662bf-e93c-44ff-a4c3-a7facb4c6b21"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textFieldExpression><![CDATA[$F{NDG_NAME}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement mode="Opaque" x="1" y="33" width="269" height="14" backcolor="#E0E0E0" uuid="e0054580-ca32-4e0d-a185-b5cbb8dcc706"/>
				<box>
					<topPen lineWidth="1.0"/>
					<rightPen lineWidth="1.0"/>
				</box>
				<textFieldExpression><![CDATA[$F{PRINTOUT.EVD_NR}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement mode="Opaque" x="286" y="33" width="269" height="14" backcolor="#E0E0E0" uuid="878a4f81-1408-4b52-8041-7af63d223478"/>
				<box>
					<topPen lineWidth="1.0"/>
					<rightPen lineWidth="1.0"/>
				</box>
				<textFieldExpression><![CDATA[$F{PRINTOUT.EVD_NAME}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement key="" mode="Opaque" x="1" y="70" width="269" height="14" backcolor="#E0E0E0" uuid="838440ea-dbc8-465f-9a3b-661cce762fbe"/>
				<box>
					<topPen lineWidth="1.0"/>
					<rightPen lineWidth="1.0"/>
				</box>
				<textFieldExpression><![CDATA[$F{PRINTOUT.PARTNER_NR}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement key="" mode="Opaque" x="286" y="70" width="269" height="14" backcolor="#E0E0E0" uuid="f84c9c91-4c88-4359-8ada-c5467677cce9"/>
				<box>
					<topPen lineWidth="1.0"/>
					<rightPen lineWidth="1.0"/>
				</box>
				<textFieldExpression><![CDATA[$F{PRINTOUT.PARTNER_NAME}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement x="0" y="6" width="555" height="22" uuid="40ac1bc6-1c3e-41e9-92d0-23413ca5dde7"/>
				<textElement>
					<font size="16" isBold="true"/>
				</textElement>
				<textFieldExpression><![CDATA[$F{PRINTOUT.KVR_HEADING}]]></textFieldExpression>
			</textField>
		</frame>
	</frame>
</band>
<?php
	$range += 10;
}
?>
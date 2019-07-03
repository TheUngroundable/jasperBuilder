<!--  PARTNERS CREDIT LINES-->
<?php
for($partner = 1; $partner <= $linked_partners; $partner++){
	$range = 1;
	for($band = 0; $band < $num_credit_bands; $band++){
?>	
<!-- LP<?php echo $partner?> BAND NUMBER <?php echo $band ?>-->

<band height="769">
	<printWhenExpression><![CDATA[AND(AND($F{NDG_NUMBER_LP<?php echo $partner ?>} != null, NOT(EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "C"))),EXACT($F{LP<?php echo $partner ?>_LIAB_CL_OVERFLOW_<?php echo $band?>},"Y"))]]></printWhenExpression>
	<frame>
		<reportElement x="0" y="0" width="555" height="690" uuid="8b5ea9cf-7d68-40d7-81e0-1f20c13e5981"/>
		<frame>
			<reportElement stretchType="RelativeToTallestObject" mode="Transparent" x="0" y="115" width="555" height="574" uuid="fc2ccbe2-c46a-4f64-b776-1f6b7341e776"/>
			<box>
				<pen lineWidth="0.5"/>
			</box>
			<textField isBlankWhenNull="true">
				<reportElement x="9" y="41" width="131" height="19" uuid="8aef0e55-e7bf-436c-adff-1ab93b2491e8"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textElement>
					<font size="8"/>
				</textElement>
				<textFieldExpression><![CDATA[$F{NDG_NUMBER_LP<?php echo $partner ?>}]]></textFieldExpression>
			</textField>
			<textField isBlankWhenNull="true">
				<reportElement x="141" y="41" width="401" height="19" uuid="f44c2acb-03a2-4a26-a41b-64faabc7c350"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textElement>
					<font size="8"/>
				</textElement>
				<textFieldExpression><![CDATA[$F{NDG_NAME_LP<?php echo $partner ?>}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement mode="Opaque" x="9" y="23" width="131" height="18" backcolor="#E0E0E0" uuid="ad6003eb-fd2f-449c-8aef-a800ea048ee2"/>
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
				<reportElement mode="Opaque" x="141" y="23" width="401" height="18" backcolor="#E0E0E0" uuid="b683fa54-ea2e-4a73-8ac5-c09b952c6ef0"/>
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
				<reportElement x="12" y="71" width="100" height="14" uuid="af905ec1-2dbf-407f-a74c-af88e14cda71"/>
				<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.CREDIT_LINES}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement x="11" y="6" width="526" height="21" uuid="945ea221-57ac-4da9-961a-bb878ae0d891"/>
				<textFieldExpression><![CDATA[$F{PRINTOUT.KVR_LINKED_PARTNER_<?php echo $partner ?>}]]></textFieldExpression>
			</textField>
			<frame>
				<reportElement x="15" y="511" width="391" height="48" uuid="5210a7fd-a34c-4251-b712-c014a412dcbd">
					<printWhenExpression><![CDATA[EXACT($F{LP<?php echo $partner ?>_LIAB_CL_TOTALS_<?php echo $band ?>}, "Y")]]></printWhenExpression>
				</reportElement>
				<textField isBlankWhenNull="true">
					<reportElement x="165" y="12" width="75" height="12" isRemoveLineWhenBlank="true" uuid="a1e80048-de79-4493-8ec7-08ab4cf90825">
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
					<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_TOTAL_LIMIT_EXISTING}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="315" y="12" width="75" height="12" isRemoveLineWhenBlank="true" uuid="1e3bbb4f-1709-45e4-a3f9-7c8b1af1d42f">
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
					<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_TOTAL_INSTALLMENT_PM}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="240" y="12" width="75" height="12" isRemoveLineWhenBlank="true" uuid="14d1a898-5ba6-421b-bb42-ac0d23dd150c">
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
					<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_TOTAL_LIMIT_PROPOSED}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="165" y="24" width="75" height="12" isRemoveLineWhenBlank="true" uuid="94e66430-f88c-41e3-b33c-9d05e154d48d">
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
					<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_TOTAL_LIMIT_EXISTING_PVT}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="240" y="24" width="75" height="12" isRemoveLineWhenBlank="true" uuid="1965e73c-51c0-41d3-b00f-5db7fabe5803">
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
					<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_TOTAL_LIMIT_PROPOSED_PVT}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="315" y="24" width="75" height="12" isRemoveLineWhenBlank="true" uuid="3ec60d07-a21e-4748-a31e-0ff1f8c0c8a5">
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
					<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_TOTAL_INSTALLMENT_PM_PVT}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="315" y="36" width="75" height="12" isRemoveLineWhenBlank="true" uuid="362ed153-bc90-4da0-89ae-d9f1fcb1f6b5">
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
					<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_TOTAL_INSTALLMENT_PM_BSN}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="240" y="36" width="75" height="12" isRemoveLineWhenBlank="true" uuid="29bb3e06-cda3-450d-8ad9-1f23907b032d">
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
					<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_TOTAL_LIMIT_PROPOSED_BSN}]]></textFieldExpression>
				</textField>
				<textField isBlankWhenNull="true">
					<reportElement x="165" y="36" width="75" height="12" isRemoveLineWhenBlank="true" uuid="6087dba3-32b2-47cc-95fc-86c588108efe">
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
					<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_TOTAL_LIMIT_EXISTING_BSN}]]></textFieldExpression>
				</textField>
				<textField>
					<reportElement mode="Opaque" x="0" y="36" width="165" height="12" backcolor="#E0E0E0" uuid="bf9ca247-6c58-4b2e-a2a8-4d0ea8d35e64">
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
					<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.TOTAL_AMOUNT_BUSINESS_LP<?php echo $partner ?>}]]></textFieldExpression>
				</textField>
				<textField>
					<reportElement mode="Opaque" x="0" y="24" width="165" height="12" backcolor="#E0E0E0" uuid="078574e6-9be9-4c98-9e9f-250ab5c5c11b">
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
					<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.TOTAL_AMOUNT_PRIVATE_LP<?php echo $partner ?>}]]></textFieldExpression>
				</textField>
				<textField>
					<reportElement mode="Opaque" x="0" y="12" width="165" height="12" backcolor="#E0E0E0" uuid="50dc10c0-493b-4678-ac33-e0e962694b42">
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
					<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.TOTAL_AMOUNT_LP<?php echo $partner ?>}]]></textFieldExpression>
				</textField>
				<textField>
					<reportElement mode="Opaque" x="240" y="0" width="75" height="12" backcolor="#E0E0E0" uuid="a7b72b41-3e69-4d9f-b557-2e75e8a1b838"/>
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
					<reportElement mode="Opaque" x="315" y="0" width="75" height="12" backcolor="#E0E0E0" uuid="b19c702d-2817-493e-b3dd-c14f3b4a4485"/>
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
					<reportElement mode="Opaque" x="165" y="0" width="75" height="12" backcolor="#E0E0E0" uuid="df2887fe-4b4f-48b6-bc1f-239a018b0656"/>
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
			</frame>
			<frame>
				<reportElement x="14" y="86" width="525" height="350" uuid="ba5f80b0-38ed-41cc-91e0-19eb53f57fa0">
					<printWhenExpression><![CDATA[EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "NRI")]]></printWhenExpression>
				</reportElement>
				<frame>
					<reportElement x="0" y="0" width="525" height="165" uuid="5528179d-de17-4596-8194-1d517919bc91"/>
					<!-- HEADING -->
					<frame>
						<reportElement x="0" y="0" width="525" height="15" uuid="efd9dc2e-50f8-463c-a174-28041d92b52a"/>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="75" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="3fa25614-8a91-463e-8f86-adc43285f7a1"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="375" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="4a4cb297-0571-457e-b823-e1d28751b4f7"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="450" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="76a67617-e48c-4711-aa08-e6c6d542277e"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="225" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="a144b64d-1349-42b9-a69c-94184a3e1f63"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="0" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="007fbc6a-406f-4582-bc68-956427e091cd"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="150" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="e4f62e55-667a-42d3-b1a8-5506c107361d"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="300" y="0" width="75" height="15" backcolor="#E0E0E0" uuid="750d6566-c45b-477d-9e11-59407909bdd9"/>
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
						<reportElement positionType="Float" x="0" y="15" width="525" height="150" uuid="4f8a5cd8-684d-41fe-8259-0e96efdfdcee"/>
						<!-- CREDIT LINE -->
						<?php 
						for($i = $range; $i<=($range+9); $i++){
							$y = 15 * (($i - 1) % 10);
						?>
						<frame>
							<reportElement x="0" y="<?php echo $y ?>" width="525" height="15" uuid="fe5f9e53-7b60-4266-bdec-22ccbee3a423"/>
							<textField isBlankWhenNull="true">
								<reportElement x="0" y="0" width="75" height="15" uuid="182fe9e2-0239-44e4-9308-a6809e005f4b"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_ACC_NUM_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="75" y="0" width="75" height="15" uuid="18e40f35-0388-4873-966b-678431d33e6a"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_INSTITUTE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="150" y="0" width="75" height="15" uuid="c440adb2-34f7-4769-847a-7bec1e49de02"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_CREDIT_PRODUCT_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="225" y="0" width="75" height="15" uuid="5ce4f63f-f836-4a69-ac47-c7dec472a571"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_LIMIT_EXISTING_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="450" y="0" width="75" height="15" uuid="a8053ee5-c4d6-4c31-ac20-a9c74ecdc97f"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_INSTALLMENT_PM_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="300" y="0" width="75" height="15" uuid="f67b8e3e-a41e-464d-9134-fc5c4a4b3bf3"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_LIMIT_PROPOSED_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="375" y="0" width="75" height="15" uuid="cdef6a8f-a62e-4065-8d80-17d4034ce4d7"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_STATUS_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
						</frame>
						<?php
						}
						?>
					</frame>
				</frame>
				<frame>
					<reportElement x="0" y="186" width="525" height="165" uuid="daec47c0-d114-494c-a9ab-f50f1a5ca17e"/>
					<!-- HEADING -->
					<frame>
						<reportElement x="0" y="0" width="525" height="15" uuid="c4b9bd70-c6d8-442c-bce1-c324a6433f2a"/>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="198" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="79c8c636-2a75-4c8f-a07f-44557a868a3b"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="330" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="417b4c30-111c-4199-912a-0d330f028c87"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="462" y="0" width="63" height="15" backcolor="#E0E0E0" uuid="cb209c80-cfe4-4004-9d43-aa9c1d1563e1"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.SHARE}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="132" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="b52340a7-adef-40a4-bcda-c22a834cf073"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="264" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="a48b3c19-7290-48e0-bbf9-93edbc6ad5ac"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="66" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="df2eafca-53de-438a-bffa-bb49265bc473"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="396" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="7307140a-5c5d-4eaa-8d15-4448d0bea981"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="0" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="21c08eb7-74e5-4fbe-ac1a-05d3753a6315"/>
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
					<!-- CREDIT LINES -->
					<frame>
						<reportElement positionType="Float" x="0" y="15" width="525" height="150" uuid="658f303c-f808-4027-872f-8942797677e9"/>
						<?php 
						for($i = $range; $i<=($range+9); $i++){
							$y = 15 * (($i - 1) % 10);
						?>
						<!-- CREDIT LINE -->
						<frame>
							<reportElement x="0" y="<?php echo $y ?>" width="525" height="15" uuid="8daac1d8-3f31-4af6-ae8d-96624f7efc27"/>
							<textField isBlankWhenNull="true">
								<reportElement x="462" y="0" width="63" height="15" uuid="d8ebeabd-7419-4504-8f7d-0d19ca58f218"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_SHARE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="330" y="0" width="66" height="15" uuid="2372a16e-4b79-4c93-a169-3372384f26ee"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_FOREIGN_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="198" y="0" width="66" height="15" uuid="6d581b28-7044-4b42-8661-e2604bea0a59"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_TYPE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="0" y="0" width="66" height="15" uuid="a9e814ad-a6a4-4eca-b6cc-dd1d9c5af1d8"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_MATURITY_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="66" y="0" width="66" height="15" uuid="2282160c-a1e0-46a3-96f6-ecc3d042a11e"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_INTEREST_RATE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="264" y="0" width="66" height="15" uuid="678db3c2-ac48-4d77-b122-7c904e175d5b"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_PURPOSE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="396" y="0" width="66" height="15" uuid="ad965508-c2d6-4eda-8c57-efc9506352e3"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_HVBOTHER_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="132" y="0" width="66" height="15" uuid="e9dac33f-0ba9-4f33-ae61-075ce8cb2cd3"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_INTEREST_RATE_FIX_UNTIL_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
						</frame>
						<?php
						}
						?>
					</frame>
				</frame>
			</frame>
			<frame>
				<reportElement x="14" y="86" width="528" height="350" uuid="da8077cc-52d6-4976-9c9c-2a9cf4cfbfa4">
					<printWhenExpression><![CDATA[OR(EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "I"), EXACT($F{KVR_CUSTOMER_CLASSIFICATION}, "PB"))]]></printWhenExpression>
				</reportElement>
				<frame>
					<reportElement x="0" y="0" width="528" height="165" uuid="60c34cea-41ec-4e1f-a5bb-7a75f653d74f"/>
					<!-- HEADING -->
					<frame>
						<reportElement x="0" y="0" width="528" height="15" uuid="9927dbe9-2347-4dd2-b692-60cba5acaca5"/>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="264" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="5c670168-8245-48ae-85f1-986f7afb24aa"/>
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
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="66" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="17964f9d-893c-49d3-b06c-35788125c474"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="132" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="1d21e14a-b771-4d22-9c28-aae4f6c8ca70"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="198" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="09849f5f-2311-4f38-88da-886e0606b04c"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="462" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="e3064d36-40b5-4165-a609-b8c655228e3a"/>
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
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="330" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="a988a9f8-1aec-42a8-b276-14be901fc6fc"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="0" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="32a84c3b-6e14-4631-962d-4a3229d82b7b"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="396" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="080f3fbd-bc7f-4ab4-8a82-661dbe7e7f2c"/>
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
					</frame>
					<frame>
						<reportElement positionType="Float" x="0" y="15" width="528" height="150" uuid="71093020-cb57-4ea6-8a93-87402d30e6d9"/>
						<frame>
							<reportElement positionType="Float" x="0" y="0" width="528" height="150" uuid="e892620f-05d6-47d0-83ff-76a96b1a1e29"/>
							<!-- CREDIT LINES -->
							<?php 
							for($i = $range; $i<=($range+9); $i++){
								$y = 15 * (($i - 1) % 10);
							?>
							<frame>
								<reportElement x="0" y="<?php echo $y ?>" width="528" height="15" uuid="b81b5707-e8af-4e57-9af0-12982536297e"/>
								<textField isBlankWhenNull="true">
									<reportElement x="198" y="0" width="66" height="15" uuid="86a188aa-fd3e-49f9-87c9-9be91c379c50"/>
									<box rightPadding="2">
										<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									</box>
									<textElement textAlignment="Right" verticalAlignment="Middle">
										<font size="8"/>
									</textElement>
									<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_LIMIT_EXISTING_<?php echo $i ?>}]]></textFieldExpression>
								</textField>
								<textField isBlankWhenNull="true">
									<reportElement x="462" y="0" width="66" height="15" uuid="184d6735-13e6-45c3-879c-a5e4f0fcd0b1"/>
									<box rightPadding="2">
										<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									</box>
									<textElement textAlignment="Right" verticalAlignment="Middle">
										<font size="8"/>
									</textElement>
									<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_MATURITY_<?php echo $i ?>}]]></textFieldExpression>
								</textField>
								<textField isBlankWhenNull="true">
									<reportElement x="264" y="0" width="66" height="15" uuid="e03e7b25-3e4c-400f-8c79-549b7b8877f9"/>
									<box rightPadding="2">
										<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									</box>
									<textElement textAlignment="Right" verticalAlignment="Middle">
										<font size="8"/>
									</textElement>
									<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_LIMIT_PROPOSED_<?php echo $i ?>}]]></textFieldExpression>
								</textField>
								<textField isBlankWhenNull="true">
									<reportElement x="132" y="0" width="66" height="15" uuid="39a923b4-1858-43b3-b276-ded276e4c3e4"/>
									<box rightPadding="2">
										<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									</box>
									<textElement textAlignment="Right" verticalAlignment="Middle">
										<font size="8"/>
									</textElement>
									<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_CREDIT_PRODUCT_<?php echo $i ?>}]]></textFieldExpression>
								</textField>
								<textField isBlankWhenNull="true">
									<reportElement x="66" y="0" width="66" height="15" uuid="fdb4f01e-5c31-4ab5-8a71-0b6bd96fee41"/>
									<box rightPadding="2">
										<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									</box>
									<textElement textAlignment="Right" verticalAlignment="Middle">
										<font size="8"/>
									</textElement>
									<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_INSTITUTE_<?php echo $i ?>}]]></textFieldExpression>
								</textField>
								<textField isBlankWhenNull="true">
									<reportElement x="330" y="0" width="66" height="15" uuid="50f7c642-23d3-4b28-b563-4fc9335ddf19"/>
									<box rightPadding="2">
										<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									</box>
									<textElement textAlignment="Right" verticalAlignment="Middle">
										<font size="8"/>
									</textElement>
									<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_STATUS_<?php echo $i ?>}]]></textFieldExpression>
								</textField>
								<textField isBlankWhenNull="true">
									<reportElement x="0" y="0" width="66" height="15" uuid="a67d128a-26f2-4a43-8d9a-9060cdce30a8"/>
									<box rightPadding="2">
										<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									</box>
									<textElement textAlignment="Right" verticalAlignment="Middle">
										<font size="8"/>
									</textElement>
									<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_ACC_NUM_<?php echo $i ?>}]]></textFieldExpression>
								</textField>
								<textField isBlankWhenNull="true">
									<reportElement x="396" y="0" width="66" height="15" uuid="9a0f1f18-35d7-430b-9ec6-12dd8a4719f7"/>
									<box rightPadding="2">
										<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
										<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									</box>
									<textElement textAlignment="Right" verticalAlignment="Middle">
										<font size="8"/>
									</textElement>
									<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_INSTALLMENT_PM_<?php echo $i ?>}]]></textFieldExpression>
								</textField>
							</frame>
							<?php
							}
							?>
						</frame>
					</frame>
				</frame>
				<frame>
					<reportElement x="0" y="186" width="528" height="165" uuid="ca229e5f-5e20-48c1-b5fc-cc75f4ad0b94"/>
					<!-- HEADING -->
					<frame>
						<reportElement x="0" y="0" width="528" height="15" uuid="baecfabc-9492-4135-9c92-4717fa22d0f1"/>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="462" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="d380d2cd-f7f7-47e3-9125-ae545d262757"/>
							<box>
								<topPen lineWidth="1.0"/>
								<leftPen lineWidth="1.0"/>
								<bottomPen lineWidth="1.0"/>
								<rightPen lineWidth="1.0"/>
							</box>
							<textElement textAlignment="Center" verticalAlignment="Top">
								<font size="8" isBold="true"/>
							</textElement>
							<textFieldExpression><![CDATA[$F{PRINTOUT.KVR.LIABILITY.SHARE}]]></textFieldExpression>
						</textField>
						<textField isStretchWithOverflow="true">
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="66" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="844fcc93-8175-45b9-afaf-c51ad3588db2"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="132" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="12cae9e8-6772-4fa6-8343-6aa814a86a64"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="0" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="b58f322e-20cd-497f-afc9-a0d5060cfea2"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="396" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="f671e265-2dd6-4307-b7b7-e7b9c9bb3729"/>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="330" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="9ef18dae-6059-4c5f-b910-99fa4624efd5"/>
							<box>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="264" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="9c03fff7-ec89-4666-9adb-e0ba68bf5579"/>
							<box>
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
							<reportElement stretchType="ElementGroupHeight" mode="Opaque" x="198" y="0" width="66" height="15" backcolor="#E0E0E0" uuid="eb65ba64-db95-4253-a825-e4095de4aceb"/>
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
					</frame>
					<frame>
						<reportElement positionType="Float" x="0" y="15" width="528" height="150" uuid="ab8c4bb8-fbd7-4a8e-99ac-76ebd7922c7b"/>
						<!-- CREDIT LINES --> 
						<?php 
						for($i = $range; $i<=($range+9); $i++){
							$y = 15 * (($i - 1) % 10);
						?>
						<frame>
							<reportElement x="0" y="<?php echo $y ?>" width="528" height="15" uuid="d29b69aa-dae9-4cf8-b04f-e499ea4604a8"/>
							<textField isBlankWhenNull="true">
								<reportElement x="396" y="0" width="66" height="15" uuid="f51d7192-dc11-43ac-94bc-0fb0521b7ab6"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_HVBOTHER_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="330" y="0" width="66" height="15" uuid="294078b8-f66f-4cd1-847c-b54a2e63db73"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_CALC_ANNUITY_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="132" y="0" width="66" height="15" uuid="f3048dea-91ad-4f92-aec4-3d050f52aae0"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_TYPE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="198" y="0" width="66" height="15" uuid="96450ca6-4e6b-415f-a16c-50243356ce2f"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_PURPOSE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="0" y="0" width="66" height="15" uuid="34a52531-93a4-481d-88f8-dac0113a34f9"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_INTEREST_RATE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="264" y="0" width="66" height="15" uuid="7ce4bf6c-13d2-49c2-b3d0-d5e001d016e1"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_PRIV_BUS_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="66" y="0" width="66" height="15" uuid="5574bc69-62d6-4d71-9ace-f6378fade295"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_INTEREST_RATE_FIX_UNTIL_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
							<textField isBlankWhenNull="true">
								<reportElement x="462" y="0" width="66" height="15" uuid="939619a8-3259-4ddf-bf5d-8e8c391f8b8d"/>
								<box rightPadding="2">
									<topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
									<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
								</box>
								<textElement textAlignment="Right" verticalAlignment="Middle">
									<font size="8"/>
								</textElement>
								<textFieldExpression><![CDATA[$F{LP<?php echo $partner ?>_LIAB_SHARE_<?php echo $i ?>}]]></textFieldExpression>
							</textField>
						</frame>
						<?php
						}
						?>
					</frame>
				</frame>
			</frame>
		</frame>
		<!-- USER HEADING -->
		<frame>
			<reportElement x="0" y="0" width="555" height="114" uuid="5e44284a-52e9-4152-9abc-f3e53c5c2470"/>
			<textField isBlankWhenNull="true">
				<reportElement x="1" y="47" width="269" height="14" uuid="1f5bf6f7-905a-4f9a-a0c3-0e300e1e2734"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textFieldExpression><![CDATA[$F{GOR_NUMBER}]]></textFieldExpression>
			</textField>
			<textField isBlankWhenNull="true">
				<reportElement x="286" y="47" width="269" height="14" uuid="af93de45-be02-4e62-86bb-976a432dce27"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textFieldExpression><![CDATA[$F{GOR_NAME}]]></textFieldExpression>
			</textField>
			<textField isBlankWhenNull="true">
				<reportElement x="1" y="84" width="269" height="14" uuid="2010f0ad-d8ed-4f74-bb04-3ae02fd490cb"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textFieldExpression><![CDATA[$F{NDG_NUMBER}]]></textFieldExpression>
			</textField>
			<textField isBlankWhenNull="true">
				<reportElement x="286" y="84" width="269" height="14" uuid="31129de5-b1c9-4d65-94d2-970c93b9153c"/>
				<box>
					<topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
					<bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
					<rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
				</box>
				<textFieldExpression><![CDATA[$F{NDG_NAME}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement mode="Opaque" x="1" y="33" width="269" height="14" backcolor="#E0E0E0" uuid="f61f7306-7b7b-411f-86cd-bd8e3bacdb8d"/>
				<box>
					<topPen lineWidth="1.0"/>
					<rightPen lineWidth="1.0"/>
				</box>
				<textFieldExpression><![CDATA[$F{PRINTOUT.EVD_NR}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement mode="Opaque" x="286" y="33" width="269" height="14" backcolor="#E0E0E0" uuid="bfc9d228-4fac-4c2a-921f-bb97a719f3bb"/>
				<box>
					<topPen lineWidth="1.0"/>
					<rightPen lineWidth="1.0"/>
				</box>
				<textFieldExpression><![CDATA[$F{PRINTOUT.EVD_NAME}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement key="" mode="Opaque" x="1" y="70" width="269" height="14" backcolor="#E0E0E0" uuid="e3c21680-15b2-4075-9375-b405e79a485b"/>
				<box>
					<topPen lineWidth="1.0"/>
					<rightPen lineWidth="1.0"/>
				</box>
				<textFieldExpression><![CDATA[$F{PRINTOUT.PARTNER_NR}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement key="" mode="Opaque" x="286" y="70" width="269" height="14" backcolor="#E0E0E0" uuid="6a14fd28-ac9f-4c5e-8d17-0e982853ac4b"/>
				<box>
					<topPen lineWidth="1.0"/>
					<rightPen lineWidth="1.0"/>
				</box>
				<textFieldExpression><![CDATA[$F{PRINTOUT.PARTNER_NAME}]]></textFieldExpression>
			</textField>
			<textField>
				<reportElement x="0" y="6" width="555" height="22" uuid="91c51afa-fcca-4c8d-bb74-944e72fc082d"/>
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
}
?>
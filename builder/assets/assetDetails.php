<?php
$range = 1;

for($band = 0; $band < $num_details_bands; $band++){
    ?>
    <!-- ASSETS DETAILS AP<?php  echo $applicant_number ?>-->	
    <band height="769">
        <printWhenExpression><![CDATA[AND(AND(NOT(EXACT($F{KVR_CUSTOMER_CLASSIFICATION},"C")), $F{ASSETS_NDG_NUMBER_AP<?php echo $applicant_number ?>} != null), EXACT($F{AP<?php echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_OVERFLOW_<?php echo $band ?>}, "Y"))]]></printWhenExpression>
        <frame>
            <reportElement x="0" y="0" width="555" height="450" uuid="b2495a69-21b2-4961-9987-5aa93215d37b"/>
            <frame>
                <reportElement mode="Transparent" x="0" y="115" width="555" height="325" uuid="7462d7ea-286b-4ed7-976d-324a566ede54"/>
                <box>
                    <pen lineWidth="0.5"/>
                </box>
                <textField>
                    <reportElement mode="Opaque" x="0" y="0" width="555" height="14" backcolor="#E0E0E0" uuid="2c85d895-06f9-4652-b2ab-48aadb7f8452"/>
                    <box leftPadding="2">
                        <topPen lineWidth="1.0"/>
                        <leftPen lineWidth="1.0"/>
                        <bottomPen lineWidth="1.0"/>
                        <rightPen lineWidth="1.0"/>
                    </box>
                    <textElement textAlignment="Center" verticalAlignment="Middle">
                        <font size="8" isBold="true"/>
                    </textElement>
                    <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.INFORMATION_EUR}]]></textFieldExpression>
                </textField>
                <!-- ASSET DETAILS OLD -->
                <frame>
                    <reportElement x="15" y="68" width="528" height="122" uuid="e7648cb9-eacd-417f-b94c-c4d3908a7c5d"/>
                    <!-- DETAILS HEADING -->
                    <textField isBlankWhenNull="true">
                        <reportElement x="0" y="0" width="103" height="16" uuid="a0cd0fca-0cd2-49e1-92df-4192f57b37c5"/>
                        <textElement textAlignment="Left"/>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.REAL_ESTATE_OLD}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="0" y="15" width="62" height="29" backcolor="#E0E0E0" uuid="13b8e030-516b-49fd-b2d8-db7cc1153a87"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.TYPE_OF_PROPERTY}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="62" y="15" width="70" height="29" backcolor="#E0E0E0" uuid="d75e6b6f-c6aa-47a7-b456-08c5a5c88e4b"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.ADDRESS}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="132" y="15" width="22" height="29" backcolor="#E0E0E0" uuid="578f4f1f-628f-4534-83c8-5581e6cb9df3"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.FOREIGN}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="154" y="15" width="30" height="29" backcolor="#E0E0E0" uuid="f2436295-a40e-4cca-8512-a44939f6f8ed"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.PROP_OF_OWNERSHIP}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="184" y="15" width="58" height="29" backcolor="#E0E0E0" uuid="2d0e4f85-09a8-4351-aefa-647d997f0f41"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.APPLICANT}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="242" y="15" width="32" height="29" backcolor="#E0E0E0" uuid="9e1012cc-a680-43ef-8148-9544f87e340e"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.NET_RENT}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="274" y="15" width="32" height="29" backcolor="#E0E0E0" uuid="a7927c2c-4176-460b-8eb1-84734d2c4782"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.NON_APPORT}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="306" y="15" width="32" height="29" backcolor="#E0E0E0" uuid="4db97045-13d2-4858-b575-674ea7baa148"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.SQUARE_METER_LIVING}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="338" y="15" width="32" height="29" backcolor="#E0E0E0" uuid="b983f5af-5d91-4808-9ecc-81e4abe41feb"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.SQUARE_METER_PROPERTY}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="370" y="15" width="32" height="29" backcolor="#E0E0E0" uuid="698c042a-b981-410d-95a6-112bef6ba8b7"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.NUMBER_FLATS}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="402" y="15" width="30" height="29" backcolor="#E0E0E0" uuid="5758d943-8239-4940-9d04-fa13997b19a3"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.CONSTRUCTION_YEAR}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="432" y="15" width="32" height="29" backcolor="#E0E0E0" uuid="3a5e0667-3c0b-42cf-b00a-8364db241b80"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.LAND_CHARGE}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="464" y="15" width="32" height="29" backcolor="#E0E0E0" uuid="64a02dce-6428-48ac-9025-2873985cc9e5"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.VALUE_CUSTOMER}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="496" y="15" width="32" height="29" backcolor="#E0E0E0" uuid="dbdf3e08-d5dc-4de3-95d1-03124cd27198"/>
                        <box topPadding="2" leftPadding="0" bottomPadding="2" rightPadding="0">
                            <topPen lineWidth="1.0"/>
                            <leftPen lineWidth="1.0"/>
                            <bottomPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement textAlignment="Center" verticalAlignment="Top">
                            <font size="8" isBold="true"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.VALUE_BANK}]]></textFieldExpression>
                    </textField>
                    <!-- DETAILS -->
                    <?php
                    include("./builder/assets/assetDetailsList.php");
                    ?>
                </frame>
                <!-- ASSETS GENERAL INFOS-->
                <frame>
                    <reportElement x="10" y="21" width="532" height="36" uuid="1a69dd85-12c1-4802-8ddc-a1ed8b1aebd7"/>
                    <textField isBlankWhenNull="true">
                        <reportElement x="0" y="18" width="131" height="19" uuid="f0be515d-2206-435d-bc9f-6f79d66f57e2"/>
                        <box>
                            <topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                            <leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                            <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                            <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                        </box>
                        <textElement>
                            <font size="8"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{ASSETS_NDG_NUMBER_AP<?php  echo $applicant_number ?>}]]></textFieldExpression>
                    </textField>
                    <textField isBlankWhenNull="true">
                        <reportElement x="132" y="18" width="400" height="19" uuid="06596520-56a3-476e-a881-bdcce24626c3"/>
                        <box>
                            <topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                            <leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                            <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                            <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                        </box>
                        <textElement>
                            <font size="8"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{ASSETS_NDG_NAME_AP<?php  echo $applicant_number ?>}]]></textFieldExpression>
                    </textField>
                    <textField>
                        <reportElement mode="Opaque" x="132" y="0" width="400" height="18" backcolor="#E0E0E0" uuid="94089e2c-ab80-437b-b121-02e8c9ae52a6"/>
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
                        <reportElement mode="Opaque" x="0" y="0" width="131" height="18" backcolor="#E0E0E0" uuid="bcf16a7b-9ea7-4a4e-b5c6-de6127639888"/>
                        <box>
                            <topPen lineWidth="1.0"/>
                            <rightPen lineWidth="1.0"/>
                        </box>
                        <textElement>
                            <font size="8"/>
                        </textElement>
                        <textFieldExpression><![CDATA[$F{PRINTOUT.NDG}]]></textFieldExpression>
                    </textField>
                </frame>
            </frame>
            <!-- BAND HEADING -->
            <frame>
                <reportElement x="0" y="0" width="555" height="114" uuid="00437d0d-14e0-4c0d-9103-fa426dc48722"/>
                <textField isBlankWhenNull="true">
                    <reportElement x="1" y="47" width="269" height="14" uuid="b699d7bf-5765-43e9-9c08-f47306f6a941"/>
                    <box>
                        <topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                        <leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                        <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                        <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                    </box>
                    <textFieldExpression><![CDATA[$F{GOR_NUMBER}]]></textFieldExpression>
                </textField>
                <textField isBlankWhenNull="true">
                    <reportElement x="286" y="47" width="269" height="14" uuid="4c072468-0e37-48c0-a1be-aa0e0b6fe044"/>
                    <box>
                        <topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                        <leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                        <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                        <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                    </box>
                    <textFieldExpression><![CDATA[$F{GOR_NAME}]]></textFieldExpression>
                </textField>
                <textField isBlankWhenNull="true">
                    <reportElement x="1" y="84" width="269" height="14" uuid="d3a0ee5b-334e-415e-9cae-65795d02f553"/>
                    <box>
                        <topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                        <leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                        <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                        <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                    </box>
                    <textFieldExpression><![CDATA[$F{NDG_NUMBER}]]></textFieldExpression>
                </textField>
                <textField isBlankWhenNull="true">
                    <reportElement x="286" y="84" width="269" height="14" uuid="5ef2ea65-5ab3-488a-8066-355fffb9ae39"/>
                    <box>
                        <topPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                        <leftPen lineWidth="0.0" lineStyle="Solid" lineColor="#000000"/>
                        <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                        <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                    </box>
                    <textFieldExpression><![CDATA[$F{NDG_NAME}]]></textFieldExpression>
                </textField>
                <textField>
                    <reportElement mode="Opaque" x="1" y="33" width="269" height="14" backcolor="#E0E0E0" uuid="d27633ec-8745-4ffa-bdd3-97c3deeaf0fd"/>
                    <box>
                        <topPen lineWidth="1.0"/>
                        <rightPen lineWidth="1.0"/>
                    </box>
                    <textFieldExpression><![CDATA[$F{PRINTOUT.EVD_NR}]]></textFieldExpression>
                </textField>
                <textField>
                    <reportElement mode="Opaque" x="286" y="33" width="269" height="14" backcolor="#E0E0E0" uuid="78e1af73-7b03-4460-bc65-7ed378cebfc9"/>
                    <box>
                        <topPen lineWidth="1.0"/>
                        <rightPen lineWidth="1.0"/>
                    </box>
                    <textFieldExpression><![CDATA[$F{PRINTOUT.EVD_NAME}]]></textFieldExpression>
                </textField>
                <textField>
                    <reportElement key="" mode="Opaque" x="1" y="70" width="269" height="14" backcolor="#E0E0E0" uuid="ee5ebc20-aff4-4348-a0aa-1a7f80f84dda"/>
                    <box>
                        <topPen lineWidth="1.0"/>
                        <rightPen lineWidth="1.0"/>
                    </box>
                    <textFieldExpression><![CDATA[$F{PRINTOUT.PARTNER_NR}]]></textFieldExpression>
                </textField>
                <textField>
                    <reportElement key="" mode="Opaque" x="286" y="70" width="269" height="14" backcolor="#E0E0E0" uuid="7c3c68ba-ce3d-41dd-be10-2f7e0e1393d3"/>
                    <box>
                        <topPen lineWidth="1.0"/>
                        <rightPen lineWidth="1.0"/>
                    </box>
                    <textFieldExpression><![CDATA[$F{PRINTOUT.PARTNER_NAME}]]></textFieldExpression>
                </textField>
                <textField>
                    <reportElement x="0" y="6" width="555" height="22" uuid="47b3408f-3c97-4ae4-8ffe-4f7788401b80"/>
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
<?php

for($i = $range; $i <= ($range+9); $i++){
    $y = 44 + 12 * (($i - 1) % 10);
    ?>
    <frame>
        <reportElement positionType="Float" x="0" y="<?php echo $y ?>" width="528" height="12" uuid="086b3695-110e-441f-b4e8-b3b9d0ececdd"/>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="306" y="0" width="32" height="12" uuid="40ea5593-1443-49db-bb79-29df53dffa08"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_SQMLS_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="432" y="0" width="32" height="12" uuid="bee28a77-3f0f-4cfb-bba6-e308dc7ebd81"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_LCHARGE_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="402" y="0" width="30" height="12" uuid="c67a5e9a-de04-4731-9676-60741488a8f4"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_CYEAR_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement key="" stretchType="ElementGroupHeight" x="0" y="0" width="62" height="12" uuid="1bd461dc-2aef-4b22-bc22-7d8220dcb713"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_TYP_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="464" y="0" width="32" height="12" uuid="727d4f36-f69d-4802-bc84-463ef6ed7c17"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_VCUST_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="132" y="0" width="22" height="12" uuid="ca485a24-be0f-48d0-919d-e7dfde465c61"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_FRN_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="496" y="0" width="32" height="12" uuid="43b7776d-64dc-4a3c-99e7-b0a283c6d77d"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_VBANK_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="274" y="0" width="32" height="12" uuid="480c5218-1095-4195-aea8-3d234d48332c"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_NARE_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="338" y="0" width="32" height="12" uuid="f6ae90f1-431d-45ad-a9e7-3786ef426ebf"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_SQMPA_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="184" y="0" width="58" height="12" uuid="16ab06b3-a759-423d-97f1-89c39ec83e24"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_APPL_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="242" y="0" width="32" height="12" uuid="256b4d05-fc00-479e-b34d-91b1db9a24f6"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_NETRENT_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="62" y="0" width="70" height="12" uuid="e443f7f2-9d9d-40fd-bb96-47180a0077bc"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_ADDR_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="154" y="0" width="30" height="12" uuid="09350514-494b-47c6-b987-3fdf9826080a"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_PROP_<?php echo $i?>}]]></textFieldExpression>
        </textField>
        <textField isStretchWithOverflow="true" isBlankWhenNull="true">
            <reportElement stretchType="ElementGroupHeight" x="370" y="0" width="32" height="12" uuid="f2759ab0-15d9-4607-b55f-4f56a4da1334"/>
            <box leftPadding="2" rightPadding="0">
                <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
                <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            </box>
            <textElement textAlignment="Left" verticalAlignment="Top">
                <font size="8"/>
            </textElement>
            <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_NFLATS_<?php echo $i?>}]]></textFieldExpression>
        </textField>
    </frame>
    <?php
}

$y+=12;

    ?>
    <!-- DETAIL TOTAL-->
    <frame>
    <reportElement positionType="Float" x="0" y="<?php echo $y ?>" width="528" height="12" uuid="f636ef24-9ee3-4594-98a1-e6507b760653"/>
    <textField isStretchWithOverflow="true" isBlankWhenNull="true">
        <reportElement positionType="Float" stretchType="ElementGroupHeight" x="242" y="0" width="32" height="12" uuid="2fa18cc7-01d2-48cc-b092-9452aeaa106d"/>
        <box leftPadding="2" rightPadding="0">
            <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
        </box>
        <textElement textAlignment="Left" verticalAlignment="Top">
            <font size="8"/>
        </textElement>
        <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_NETRENT_TOTAL}]]></textFieldExpression>
    </textField>
    <textField isStretchWithOverflow="true" isBlankWhenNull="true">
        <reportElement positionType="Float" stretchType="ElementGroupHeight" x="464" y="0" width="32" height="12" uuid="852260a2-1196-472d-898e-d65f3ca7efc3"/>
        <box leftPadding="2" rightPadding="0">
            <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
        </box>
        <textElement textAlignment="Left" verticalAlignment="Top">
            <font size="8"/>
        </textElement>
        <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_VCUST_TOTAL}]]></textFieldExpression>
    </textField>
    <textField isStretchWithOverflow="true" isBlankWhenNull="true">
        <reportElement positionType="Float" stretchType="ElementGroupHeight" x="496" y="0" width="32" height="12" uuid="510c50a8-2453-427b-9676-17ebf3dfab8d"/>
        <box leftPadding="2" rightPadding="0">
            <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
        </box>
        <textElement textAlignment="Left" verticalAlignment="Top">
            <font size="8"/>
        </textElement>
        <textFieldExpression><![CDATA[$F{AP<?php  echo $applicant_number ?>_ASSETS_DTLS_<?php  echo $detail_type ?>_VBANK_TOTAL}]]></textFieldExpression>
    </textField>
    <staticText>
        <reportElement positionType="Float" stretchType="ElementGroupHeight" mode="Opaque" x="274" y="0" width="190" height="12" backcolor="#E0E0E0" uuid="5364f1ac-8670-4e89-bca3-565a450cef3a"/>
        <box>
            <topPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <leftPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <bottomPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
            <rightPen lineWidth="1.0" lineStyle="Solid" lineColor="#000000"/>
        </box>
        <textElement textAlignment="Center" verticalAlignment="Middle">
            <font size="5" isBold="true" pdfFontName="Helvetica-Bold"/>
        </textElement>
        <text><![CDATA[]]></text>
    </staticText>
    <textField isStretchWithOverflow="true">
        <reportElement positionType="Float" stretchType="ElementGroupHeight" mode="Opaque" x="0" y="0" width="242" height="12" backcolor="#E0E0E0" uuid="5feeba30-4cf8-4390-bbe5-1c8390e47aba"/>
        <box leftPadding="2">
            <topPen lineWidth="1.0"/>
            <leftPen lineWidth="1.0"/>
            <bottomPen lineWidth="1.0"/>
            <rightPen lineWidth="1.0"/>
        </box>
        <textElement textAlignment="Left" verticalAlignment="Middle">
            <font size="8" isBold="true"/>
        </textElement>
        <textFieldExpression><![CDATA[$F{PRINTOUT.KVR.ASSETS.TOTAL_AMOUNT}]]></textFieldExpression>
    </textField>
    </frame>
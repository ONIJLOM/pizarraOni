<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Texto Plano</title>
</head>

<body>

    <?xml version="1.0" encoding="windows-1252" standalone="no" ?>
    <XMI xmi.version="1.1" xmlns:UML="omg.org/UML1.3" timestamp="2023-10-08 01:19:34">
        <XMI.header>
            <XMI.documentation>
                <XMI.exporter>Enterprise Architect</XMI.exporter>
                <XMI.exporterVersion>2.5</XMI.exporterVersion>
                <XMI.exporterID>1628</XMI.exporterID>
            </XMI.documentation>
        </XMI.header>
        <XMI.content>
            <UML:Model name="EA Model" xmi.id="MX_EAID_5F2366CC_BC94_40f2_B04F_082BDBE2B630">
                <UML:Namespace.ownedElement>
                    <UML:Class name="EARootClass" xmi.id="EAID_11111111_5487_4080_A7F4_41526CB0AA00" isRoot="true"
                        isLeaf="false" isAbstract="false" />
                    <UML:Package name="Starter Sequence Diagram" xmi.id="EAPK_5F2366CC_BC94_40f2_B04F_082BDBE2B630"
                        isRoot="false" isLeaf="false" isAbstract="false" visibility="public">
                        <UML:ModelElement.taggedValue>
                            <UML:TaggedValue tag="parent" value="EAPK_12F8B5EE_49E0_465a_93D6_ACD3208AE941" />
                            <UML:TaggedValue tag="ea_package_id" value="2" />
                            <UML:TaggedValue tag="created" value="2023-10-08 01:18:56" />
                            <UML:TaggedValue tag="modified" value="2023-10-08 01:18:56" />
                            <UML:TaggedValue tag="iscontrolled" value="0" />
                            <UML:TaggedValue tag="lastloaddate" value="2023-10-08 01:18:56" />
                            <UML:TaggedValue tag="lastsavedate" value="2023-10-08 01:18:56" />
                            <UML:TaggedValue tag="version" value="1.0" />
                            <UML:TaggedValue tag="isprotected" value="0" />
                            <UML:TaggedValue tag="usedtd" value="0" />
                            <UML:TaggedValue tag="logxml" value="0" />
                            <UML:TaggedValue tag="tpos" value="1" />
                            <UML:TaggedValue tag="batchsave" value="0" />
                            <UML:TaggedValue tag="batchload" value="0" />
                            <UML:TaggedValue tag="phase" value="1.0" />
                            <UML:TaggedValue tag="status" value="Proposed" />
                            <UML:TaggedValue tag="author" value="JSuarez" />
                            <UML:TaggedValue tag="complexity" value="1" />
                            <UML:TaggedValue tag="ea_stype" value="Public" />
                            <UML:TaggedValue tag="tpos" value="1" />
                            <UML:TaggedValue tag="gentype" value="&lt;none&gt;" />
                        </UML:ModelElement.taggedValue>
                        <UML:Namespace.ownedElement>

                            {{-- solo actores --}}
                            @foreach ($artefactos as $f)
                                @if ($f->tipo == 'actor')
                                    <UML:Actor name="{{ $f->text }}" xmi.id="{{ $f->id }}"
                                        visibility="public" namespace="EAPK_5F2366CC_BC94_40f2_B04F_082BDBE2B630"
                                        isRoot="false" isLeaf="false" isAbstract="false">
                                        <UML:ModelElement.taggedValue>
                                            <UML:TaggedValue tag="isSpecification" value="false" />
                                            <UML:TaggedValue tag="ea_stype" value="{{ $f->text }}" />
                                            <UML:TaggedValue tag="ea_ntype" value="0" />
                                            <UML:TaggedValue tag="version" value="1.0" />
                                            <UML:TaggedValue tag="isActive" value="false" />
                                            <UML:TaggedValue tag="package"
                                                value="EAPK_5F2366CC_BC94_40f2_B04F_082BDBE2B630" />
                                            <UML:TaggedValue tag="date_created" value="2023-10-08 01:18:56" />
                                            <UML:TaggedValue tag="date_modified" value="2023-10-08 01:18:56" />
                                            <UML:TaggedValue tag="gentype" value="&lt;none&gt;" />
                                            <UML:TaggedValue tag="tagged" value="0" />
                                            <UML:TaggedValue tag="package_name" value="Starter Sequence Diagram" />
                                            <UML:TaggedValue tag="phase" value="1.0" />
                                            <UML:TaggedValue tag="author" value="JSuarez" />
                                            <UML:TaggedValue tag="complexity" value="1" />
                                            <UML:TaggedValue tag="status" value="Proposed" />
                                            <UML:TaggedValue tag="tpos" value="0" />
                                            <UML:TaggedValue tag="ea_localid" value="2" />
                                            <UML:TaggedValue tag="ea_eleType" value="element" />
                                            <UML:TaggedValue tag="style"
                                                value="BackColor=-1;BorderColor=-1;BorderWidth=-1;FontColor=-1;VSwimLanes=1;HSwimLanes=1;BorderStyle=0;" />
                                        </UML:ModelElement.taggedValue>
                                    </UML:Actor>
                                @endif
                            @endforeach





                                <UML:Namespace.ownedElement>
                                    {{-- solo: controladores, vistas, modelos --}}
                                    @foreach ($artefactos as $f)
                                        @if ($f->tipo != 'actor')
                                            <UML:ClassifierRole name="{{ $f->text }}"
                                                xmi.id="{{ $f->id }}" visibility="public"
                                                base="EAID_11111111_5487_4080_A7F4_41526CB0AA00">
                                                <UML:ModelElement.taggedValue>
                                                    <UML:TaggedValue tag="isAbstract" value="false" />
                                                    <UML:TaggedValue tag="isSpecification" value="false" />
                                                    <UML:TaggedValue tag="ea_stype" value="Sequence" />
                                                    <UML:TaggedValue tag="ea_ntype" value="0" />
                                                    <UML:TaggedValue tag="version" value="1.0" />
                                                    <UML:TaggedValue tag="isActive" value="false" />
                                                    <UML:TaggedValue tag="package"
                                                        value="EAPK_5F2366CC_BC94_40f2_B04F_082BDBE2B630" />
                                                    <UML:TaggedValue tag="date_created" value="2023-10-08 01:18:56" />
                                                    <UML:TaggedValue tag="date_modified"
                                                        value="2023-10-08 01:18:56" />
                                                    <UML:TaggedValue tag="gentype" value="&lt;none&gt;" />
                                                    <UML:TaggedValue tag="tagged" value="0" />
                                                    <UML:TaggedValue tag="package_name"
                                                        value="Starter Sequence Diagram" />
                                                    <UML:TaggedValue tag="phase" value="1.0" />
                                                    <UML:TaggedValue tag="author" value="JSuarez" />
                                                    <UML:TaggedValue tag="complexity" value="1" />
                                                    <UML:TaggedValue tag="status" value="Proposed" />
                                                    <UML:TaggedValue tag="tpos" value="0" />
                                                    <UML:TaggedValue tag="ea_localid" value="4" />
                                                    <UML:TaggedValue tag="ea_eleType" value="element" />
                                                    <UML:TaggedValue tag="style"
                                                        value="BackColor=-1;BorderColor=-1;BorderWidth=-1;FontColor=-1;VSwimLanes=1;HSwimLanes=1;BorderStyle=0;" />
                                                </UML:ModelElement.taggedValue>
                                            </UML:ClassifierRole>
                                        @endif
                                    @endforeach
                                </UML:Namespace.ownedElement>


                                <UML:Collaboration.interaction>
                                    <UML:Interaction xmi.id="EAID_5F2366CC_BC94_40f2_B04F_082BDBE2B630_INT"
                                        name="EAID_5F2366CC_BC94_40f2_B04F_082BDBE2B630_INT">

                                        {{-- las actividades links --}}
                                        <UML:Interaction.message>
                                            @foreach ($enlaces as $e)
                                                <UML:Message name="{{ $e->text }}" xmi.id="{{ $e->id }}"
                                                    visibility="public" sender="{{ $e->from }}"
                                                    receiver="{{ $e->to }}">
                                                    <UML:ModelElement.taggedValue>
                                                        <UML:TaggedValue tag="style" value="1" />
                                                        <UML:TaggedValue tag="ea_type" value="Sequence" />
                                                        <UML:TaggedValue tag="direction"
                                                            value="Source -&gt; Destination" />
                                                        <UML:TaggedValue tag="linemode" value="1" />
                                                        <UML:TaggedValue tag="linecolor" value="-1" />
                                                        <UML:TaggedValue tag="linewidth" value="0" />
                                                        <UML:TaggedValue tag="seqno" value="1" />
                                                        <UML:TaggedValue tag="headStyle" value="0" />
                                                        <UML:TaggedValue tag="lineStyle" value="0" />
                                                        <UML:TaggedValue tag="privatedata1" value="Synchronous" />
                                                        <UML:TaggedValue tag="privatedata2" value="retval=void;" />
                                                        <UML:TaggedValue tag="privatedata3" value="Call" />
                                                        <UML:TaggedValue tag="privatedata4" value="0" />
                                                        <UML:TaggedValue tag="ea_localid" value="1" />
                                                        <UML:TaggedValue tag="ea_sourceName" value="Actor A" />
                                                        <UML:TaggedValue tag="ea_targetName" value="Object A" />
                                                        <UML:TaggedValue tag="ea_sourceType" value="Actor" />
                                                        <UML:TaggedValue tag="ea_targetType" value="Sequence" />
                                                        <UML:TaggedValue tag="ea_sourceID" value="2" />
                                                        <UML:TaggedValue tag="ea_targetID" value="4" />
                                                        <UML:TaggedValue tag="src_visibility" value="Public" />
                                                        <UML:TaggedValue tag="src_isOrdered" value="false" />
                                                        <UML:TaggedValue tag="src_targetScope" value="instance" />
                                                        <UML:TaggedValue tag="src_changeable" value="none" />
                                                        <UML:TaggedValue tag="src_isNavigable" value="false" />
                                                        <UML:TaggedValue tag="src_containment" value="Unspecified" />
                                                        <UML:TaggedValue tag="src_style"
                                                            value="Union=0;Derived=0;AllowDuplicates=0;Owned=0;Navigable=Non-Navigable;" />
                                                        <UML:TaggedValue tag="dst_visibility" value="Public" />
                                                        <UML:TaggedValue tag="dst_aggregation" value="0" />
                                                        <UML:TaggedValue tag="dst_isOrdered" value="false" />
                                                        <UML:TaggedValue tag="dst_targetScope" value="instance" />
                                                        <UML:TaggedValue tag="dst_changeable" value="none" />
                                                        <UML:TaggedValue tag="dst_isNavigable" value="true" />
                                                        <UML:TaggedValue tag="dst_containment" value="Unspecified" />
                                                        <UML:TaggedValue tag="dst_style"
                                                            value="Union=0;Derived=0;AllowDuplicates=0;Owned=0;Navigable=Navigable;" />
                                                        <UML:TaggedValue tag="privatedata5"
                                                            value="SX=0;SY=0;EX=0;EY=0;$LLB=;LLT=;LMT=;LMB=;LRT=;LRB=;IRHS=;ILHS=;" />
                                                        <UML:TaggedValue tag="sequence_points"
                                                            value="PtStartX=150;PtStartY=-135;PtEndX=294;PtEndY=-135;" />
                                                        <UML:TaggedValue tag="stateflags"
                                                            value="Activation=0;ExtendActivationUp=0;" />
                                                        <UML:TaggedValue tag="virtualInheritance" value="0" />
                                                        <UML:TaggedValue tag="diagram"
                                                            value="EAID_BC4DD4CF_8509_4fb3_B3A0_7CE75966F97C" />
                                                        <UML:TaggedValue tag="mt" value="Message One()" />
                                                    </UML:ModelElement.taggedValue>
                                                </UML:Message>
                                            @endforeach
                                        </UML:Interaction.message>
                                    </UML:Interaction>
                                </UML:Collaboration.interaction>


                            </UML:Collaboration>
                        </UML:Namespace.ownedElement>
                    </UML:Package>
                </UML:Namespace.ownedElement>
            </UML:Model>
            <UML:Diagram name="Starter Sequence Diagram" xmi.id="EAID_BC4DD4CF_8509_4fb3_B3A0_7CE75966F97C"
                diagramType="SequenceDiagram" owner="EAPK_5F2366CC_BC94_40f2_B04F_082BDBE2B630"
                toolName="Enterprise Architect 2.5">
                <UML:ModelElement.taggedValue>
                    <UML:TaggedValue tag="version" value="1.0" />
                    <UML:TaggedValue tag="author" value="JSuarez" />
                    <UML:TaggedValue tag="created_date" value="2023-10-08 01:18:56" />
                    <UML:TaggedValue tag="modified_date" value="2023-10-08 01:18:56" />
                    <UML:TaggedValue tag="package" value="EAPK_5F2366CC_BC94_40f2_B04F_082BDBE2B630" />
                    <UML:TaggedValue tag="type" value="Sequence" />
                    <UML:TaggedValue tag="swimlanes"
                        value="locked=false;orientation=0;width=0;inbar=false;names=false;color=-1;bold=false;fcol=0;tcol=-1;ofCol=-1;ufCol=-1;hl=0;ufh=0;hh=0;cls=0;bw=0;hli=0;bro=0;SwimlaneFont=lfh:-13,lfw:0,lfi:0,lfu:0,lfs:0,lfface:Calibri,lfe:0,lfo:0,lfchar:1,lfop:0,lfcp:0,lfq:0,lfpf=0,lfWidth=0;" />
                    <UML:TaggedValue tag="matrixitems"
                        value="locked=false;matrixactive=false;swimlanesactive=true;kanbanactive=false;width=1;clrLine=0;" />
                    <UML:TaggedValue tag="ea_localid" value="1" />
                    <UML:TaggedValue tag="EAStyle"
                        value="ShowPrivate=1;ShowProtected=1;ShowPublic=1;HideRelationships=0;Locked=0;Border=1;HighlightForeign=1;PackageContents=1;SequenceNotes=0;ScalePrintImage=0;PPgs.cx=1;PPgs.cy=1;DocSize.cx=826;DocSize.cy=1169;ShowDetails=0;Orientation=P;Zoom=100;ShowTags=0;OpParams=1;VisibleAttributeDetail=0;ShowOpRetType=1;ShowIcons=1;CollabNums=0;HideProps=0;ShowReqs=0;ShowCons=0;PaperSize=9;HideParents=0;UseAlias=0;HideAtts=0;HideOps=0;HideStereo=0;HideElemStereo=0;ShowTests=0;ShowMaint=0;ConnectorNotation=UML 2.1;ExplicitNavigability=0;ShowShape=1;AllDockable=0;AdvancedElementProps=1;AdvancedFeatureProps=1;AdvancedConnectorProps=1;m_bElementClassifier=1;SPT=1;ShowNotes=0;SuppressBrackets=0;SuppConnectorLabels=0;PrintPageHeadFoot=0;ShowAsList=0;" />
                    <UML:TaggedValue tag="styleex"
                        value="SaveTag=A3F5D21C;ExcludeRTF=0;DocAll=0;HideQuals=0;AttPkg=1;ShowTests=0;ShowMaint=0;SuppressFOC=0;INT_ARGS=;INT_RET=;INT_ATT=;SeqTopMargin=50;MatrixActive=0;SwimlanesActive=1;KanbanActive=0;MatrixLineWidth=1;MatrixLineClr=0;MatrixLocked=0;TConnectorNotation=UML 2.1;TExplicitNavigability=0;AdvancedElementProps=1;AdvancedFeatureProps=1;AdvancedConnectorProps=1;m_bElementClassifier=1;SPT=1;MDGDgm=;STBLDgm=;ShowNotes=0;VisibleAttributeDetail=0;ShowOpRetType=1;SuppressBrackets=0;SuppConnectorLabels=0;PrintPageHeadFoot=0;ShowAsList=0;SuppressedCompartments=;Theme=:119;" />
                </UML:ModelElement.taggedValue>
                <UML:Diagram.element>

                    {{-- hacer un contador que se incremente de 160 por cada iteracion --}}
                    @php
                        $contadorx = 100;
                        $contadory = 190;
                    @endphp
                    @foreach ($artefactos as $a)
                        <UML:DiagramElement
                            geometry="Left={{ $contadorx }};Top=50;Right={{ $contadory }};Bottom=276;"
                            subject="{{ $a->id }}" seqno="{{ $a->id }}"
                            style="DUID={{ $a->id }};" />
                        $contadorx = $contadorx + 160;
                        $contadory = $contadory + 160;
                    @endforeach


                    @foreach ($enlaces as $e)
                        <UML:DiagramElement geometry="SX=0;SY=0;EX=0;EY=0;Path=;" subject="{{ $e->id }}"
                            style=";Hidden=0;" />
                    @endforeach

                </UML:Diagram.element>
            </UML:Diagram>
        </XMI.content>
        <XMI.difference />
        <XMI.extensions xmi.extender="Enterprise Architect 2.5" />
    </XMI>


</body>

</html>

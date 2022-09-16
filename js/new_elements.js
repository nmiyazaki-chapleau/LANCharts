var LayerID = 0;

function newLayer() {
    /* Construction */
    const layer         = document.createElement("div");
    
    const layerTitleRow = document.createElement("div");
    const layerName     = document.createElement("h2");
    const newDeviceBtn  = document.createElement("button");
    const editLayerBtn  = document.createElement("button");
    const delLayerBtn   = document.createElement("button");
    
    const layerContaint = document.createElement("div"); 

    document.getElementById("layersWrap").appendChild(layer);

    layer.appendChild(layerTitleRow);
    layerTitleRow.appendChild(layerName);
    layerTitleRow.appendChild(newDeviceBtn);
    layerTitleRow.appendChild(editLayerBtn);
    layerTitleRow.appendChild(delLayerBtn);

    layer.appendChild( document.createElement("hr") );
    layer.appendChild(layerContaint);
    
    /* Formatage */
    layer.id = "L" + LayerID;
    layer.classList.add("row", "layer");

    layerTitleRow.classList.add("row");
    layerName.classList.add("col");
    newDeviceBtn.classList.add("col");
    editLayerBtn.classList.add("col");
    delLayerBtn.classList.add("col");
    
    layerName.innerHTML = "Layer " + LayerID;

    newDeviceBtn.classList.add("btn", "btn-success");
    newDeviceBtn.innerHTML = "Nouveau périphérique";
    newDeviceBtn.setAttribute("onClick", "newDevice('Device', '"+ layer.id +"');");

    editLayerBtn.classList.add("btn", "btn-primary");
    editLayerBtn.innerHTML = "Modifier";
    //editLayerBtn.setAttribute("onClick", "newDevice('Device', '"+ layer.id +"');");

    delLayerBtn.classList.add("btn", "btn-danger");
    delLayerBtn.innerHTML = "Supprimer";
    delLayerBtn.setAttribute("onClick", "delContainer('" + layer.id + "');");

    LayerID++;
}

function newDevice(name, layer) {
    /* Construction */
    const device = document.createElement("div");
    const deviceName = document.createElement("h3");
    const deviceContaint = document.createElement("div");

    document.getElementById(layer).appendChild(device);
    device.appendChild(deviceName);

    /* Formatage */
    device.classList.add("col", "device", "m-2");
    deviceName.innerHTML = "Device"
}

function delContainer(layer){
    const node = document.getElementById(layer);

    while (node.firstChild) {
        node.removeChild(node.lastChild);
    }
    
    node.remove();
}
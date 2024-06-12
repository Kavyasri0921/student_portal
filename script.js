const form=document.querySelector("form"),
fileInput=form.querySelector(".file-input"),
progressArea=document.querySelector(".progress-area"),
uploadedArea=document.querySelector(".uploaded-area");

form.addEventListener("click",()=>{
	fileInput.click();
});
fileInput.onchange=({target})=>
{
	let file=target.files[0];
	if(file)
	{
		let fileName=file.name;
		uploadFile(fileName);
	
	}
}
function uploadFile(name)
{
	let xhr=new XMLHttpRequest();
	xhr.open("POST","php/upload.php");
	xhr.upload.addEventListener("progress",({loaded,total})=>
	{
		let fileLoaded=Math.floor((loaded/1000)*100);
		let fileTotal=Math.floor(total/1000);
		let progressHTML=`<li class="row">
		<i class="fas fa-file-alt"></i>
				<div class="content">
					<div class="details">
						<span class="name">${name}.Uploading</span>
						<span class="percent">${fileLoaded}%</span>
					</div>
					<div class="progress-bar">
						<div class="progress" style="width:${fileLoaded}"></div>
				</div>
				</div>
			</li>`;
			progressArea.innerHTML=progressHTML;
			
		let uploadedHTML=``;
	});
	let formData=new FormData(form);
	xhr.send(formData);
}

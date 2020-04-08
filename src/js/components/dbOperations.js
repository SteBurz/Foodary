// data: object   
export function postToDb(postData) {
    $.post(postData.url, postData.formData)
        .then((data)=>{
            data = JSON.parse(data);
        });
}
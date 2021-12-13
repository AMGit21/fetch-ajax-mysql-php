// using fetch
//  *************************************************************************** 
const request = async(url, data) => {
    const res = await fetch(url, {
        method: 'POST',
        headers: { 'Content-type': 'application/json' },
        body: data
    });
    const received_data = await res.json();
    console.log(received_data);
    document.getElementById('message').innerHTML =
        `<div id="message" class="alert alert-secondary alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong style="color: #121032">Remark:</strong> <span style="color: #B95656">${received_data['message']}.</span>
    </div>`;
    if (received_data['first_name']) {
        document.getElementById('tbody_info_person').innerHTML +=
            `<tr><td>${received_data["first_name"]}</td><td>${received_data["last_name"]}</td></tr>`;
    }
}

const get_allPerson = async(url) => {
        const res = await fetch(url);
        const received_data = await res.json();
        console.log(received_data);
        let tbody_person = '';
        Object.keys(received_data).forEach(person => {
            let person_record = `<tr class='table'>
            <td>${received_data[person].fname}</td>
            <td>${received_data[person].lname}</td>
            </tr>`;
            tbody_person += person_record;
        });
        $('#tbody_info_person').empty()
        $('#tbody_info_person').append(tbody_person);
    }
    // insert new person
document.getElementById('add_new').addEventListener("click", () => {
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var json = JSON.stringify({ 'fname': fname, 'lname': lname });
    request('./insert_person.php', json);
});
// display all person
document.getElementById('get_data').addEventListener("click", () => {
    get_allPerson('./get_allPerson.php');
});
//  *************************************************************************** 

const title = document.getElementById('title');
const animate_title = title.animate(
    [
        // { transform: "translateX(10em)" },
        // { transform: "translateY(-6em)" },
        // { opacity: 0.4 },
        // { transform: "scale(1.5)" },
        { backgroundColor: "#121032" },
        { color: "#B95656" },
        { border: "3px solid #B95656" },
        // { fontWeight: "bold" }
        { boxShadow: "5px 3px 8px #121032" },
        { borderRadius: "200px 10px 200px 10px" },
        { textShadow: "3px 3px 5px #121032" }
    ], {
        duration: 3000,
        iterations: Infinity,
        direction: 'alternate',
        easing: 'ease-in-out',
    }
);
document.querySelectorAll('table thead tr')
    .forEach(record => {
        record.animate(
            [
                { transform: "scale(1.1)" }
            ], {
                duration: 1000,
                iterations: Infinity,
                direction: 'alternate',
                easing: 'ease-in-out',
            }
        )
    });
const addNew = document.getElementById('add_new');
const animate_addNew = addNew.animate(
    [
        { transform: "translateX(-1em)" },
        { opacity: 0.4 }
    ], {
        duration: 1000,
        iterations: Infinity,
        direction: 'alternate',
        easing: 'ease-in-out',
    }
);
// animate_addNew.play();
const getData = document.getElementById('get_data');
const animate_getData = getData.animate(
    [
        { transform: "translateX(1em)" },
        // { transform: "translateY(6em)" },
        { opacity: 0.4 }

    ], {
        duration: 1000,
        iterations: Infinity,
        direction: 'alternate',
        easing: 'ease-in-out',
    }
);
// animate_getData.reverse();
document.getElementById('fname').addEventListener('focus', () => {
    animate_getMessage.pause();
});
document.getElementById('fname').addEventListener('focusout', () => {
    animate_getMessage.play();
});
document.getElementById('lname').addEventListener('focus', () => {
    animate_getMessage.pause();
});
document.getElementById('lname').addEventListener('focusout', () => {
    animate_getMessage.play();
});

const getMessage = document.getElementById('message');
const animate_getMessage = getMessage.animate(
    [
        { transform: "translateY(-3.2em)" },
        { opacity: 0.4 }
    ], {
        duration: 1500,
        iterations: Infinity,
        direction: 'alternate',
        easing: 'ease-in-out',
    }
);
//  *************************************************************************** 
// using ajax

// $(document).ready(function() {
//     $('#add_new').click(function(e) {
//         e.preventDefault();
//         var fname = $("#fname").val();
//         var lname = $("#lname").val();
//         $.ajax({
//             type: "POST",
//             url: "./insert_person.php",
//             dataType: "json",
//             data: { fname: fname, lname: lname },
//             success: function(received_data) {
//                 console.log(received_data);
//                 document.getElementById('message').innerHTML = ` <div id="message" class="alert alert-secondary alert-dismissible fade show">
//                     <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
//                     <strong style="color: #121032">Remark:</strong> <span style="color: #B95656">${received_data['message']}.</span>
//                   </div>`;
//                 if (received_data['first_name']) {
//                     document.getElementById('tbody_info_person').innerHTML +=
//                         `<tr><td>${received_data["first_name"]}</td><td>${received_data["last_name"]}</td></tr>`;
//                 }
//             },
//             error: function(request, status, error) {
//                 console.log(error);
//             }
//         });
//     });
// });
//  ***************************************************************************
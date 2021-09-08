const lesson = (title, photo, data, trainer) => {
    return {
        title: title,
        photoUrl: `./../photos/${photo}_photo.png`,
        data: data,
        trainer: trainer
    }
}

// Буде винесено в БД
const lessons = [
    lesson('Баскетбол', 'basketball', "17:00 (08.09.2021)", "Traktor I.V."),
    lesson('Плавання', 'swimming', "14:20 (08.09.2021)", "Traktor I.V."),
    lesson('Волейбол', 'volleyball', "13:10 (08.09.2021)", "Traktor I.V.")
]

const table = document.getElementById('table')

for (let i of lessons) {
    table.innerHTML +=
        `<tr>
            <th> ${i.title} </th>
            <th> <img alt="..." src="${i.photoUrl}" style="width: 150px;height: 100px"> </th>
            <th> ${i.data} </th>
            <th> Тренер: ${i.trainer} </th>
            <th>
                <form action="./../System/Error.html" method="get">
                    <input type="submit" value="Записатися">
                </form>
           </th>
        </tr>`
}
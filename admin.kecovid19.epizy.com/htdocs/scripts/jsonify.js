const html = document.getElementById('html-input');
const hiddenDisplay = document.getElementById('hidden-display');
const convertBtn = document.getElementById('convert-btn');
const copyBtn = document.getElementById('copy-btn');
const output = document.getElementById('output');

function print(msg = undefined) {
    console.log(msg);
}

const utils = {
    jsonReplacer(match, pIndent, pKey, pVal, pEnd) {
        var key = '<span class=json-key>';
        var val = '<span class=json-value>';
        var str = '<span class=json-string>';
        var r = pIndent || '';
        if (pKey)
            r = r + key + pKey.replace(/[: ]/g, '') + '</span>: ';
        if (pVal)
            r = r + (pVal[0] == '"' ? str : val) + pVal + '</span>';
        return r + (pEnd || '');
    },
    jsonPrettyPrint(obj) {
        var jsonLine = /^( *)("[\w]+": )?("[^"]*"|[\w.+-]*)?([,[{])?$/mg;
        return JSON.stringify(obj, null, 2)
            .replace(/&/g, '&amp;').replace(/\\"/g, '&quot;')
            .replace(/</g, '&lt;').replace(/>/g, '&gt;')
            .replace(jsonLine, utils.jsonReplacer);
    },
    wordCount(text) {
        return text.trim().split(/\s+/).length;
    },
    /**
     * 
     * @param {string} text 
     * @param {string} char 
     */
    charPositions(text, char) {
        var positions = [];
        for (let i = 0; i < text.length; i++) {
            if (text[i] === char) {
                positions.push(i);
            }
        }
        return positions;
    },
    /**
     * 
     * @param {string} text 
     */
    toCamelCase(text) {
        return text.replace(/(?:^\w|[A-Z]|\b\w)/g, function (word, index) {
            return index === 0 ? word.toLowerCase() : word.toUpperCase();
        }).replace(/\s+/g, '');
    }
}

/**
 * 
 * @param {string} html 
 */
function execHtml(html) {
    hiddenDisplay.innerHTML = html;
}

function getTable() {
    const tableElement = hiddenDisplay.getElementsByTagName('table')[0];
    const head = tableElement.querySelectorAll('thead>tr>th>div>span');
    const body = tableElement.querySelectorAll('tbody>tr');

    const table = {
        head: [],
        body: [],
        cols: 0,
        rows: 0
    };

    for (let i = 0; i < head.length; i++) {
        table.cols++;
        const column = utils.toCamelCase(head[i].textContent);
        table.head.push(column);
    }

    for (let i = 0; i < body.length; i++) {
        table.rows++;
        const row = body[i];
        const country = tableElement.tBodies[0].getElementsByTagName('th')[i].getElementsByTagName('span')[0].textContent;
        var data = { location: country };
        for (let i2 = 1; i2 < table.cols; i2++) {
            const col = table.head[i2];
            const value = row.getElementsByTagName('td')[i2 - 1].textContent;
            data[col] = value;
        }
        table.body.push(data);
    }

    return table;
}

convertBtn.addEventListener('click', function () {
    execHtml(html.value);
    const table = getTable();
    const prettyJson = utils.jsonPrettyPrint(table);
    print(table);
    output.innerHTML = prettyJson;
});

copyBtn.addEventListener('click', function () {
    const table = getTable();
    const json = JSON.stringify(table);
    navigator.clipboard.writeText(json)
        .then(function () { print('Copied: ' + json); })
        .catch(function () { print('Failed to copy text'); });
});
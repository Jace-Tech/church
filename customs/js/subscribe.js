const form = document.forms[0];

form.addEventListener("submit", handleSubscribers);

function customFetch(url, meth, data, pushDate) {
    return fetch(url, {
        method: meth,
        body: data,
        headers: {
            "x-upload-date": pushDate,
            "x-email-id": crypto.randomUUID().toString(16),
        },
    });
}

function alertMessage(message) {
    if (Object.hasOwn(Swal, "fire")) {
        Swal.fire({
            ...message,
        });
    }
}

function handleSubscribers(e) {
    if (!Object.is(typeof "preventDefault" in e, "undefined"))
        e.preventDefault();

    const user = form.elements.item(0);

    if (!user.value.trim()) {
        alertMessage({
            title: "Please Your Email Address",
            text: "And Get In Touch With Our Reports",
            icon: "error",
        });
        return;
    }

    if (/^(\&\#\)\/)$/.test(user.value)) {
        alertMessage({
            title: "Invalid Email Address",
            text: "Some Symbols Were Detected",
            icon: "error",
        });
    }

    const data = {
        id: crypto.randomUUID(),
        user: user.value,
    };

    getAsAnObject(data);
}

function getAsAnObject(data) {
    const formdata = new FormData();
    if (!Object.hasOwn(data, "command")) {
        Object.assign(data, { command: "subscribers" });
    }
    Object.entries(data).forEach(([key, value]) => {
        formdata.append(key, value);
    });
    pushSubscribersToDb(formdata);
}

async function pushSubscribersToDb(data) {
    form.elements.item(form.elements.length - 1).innerHTML = "Subscribing";
    form.elements.item(form.elements.length - 1).disabled = true;
    if (Object.hasOwn(Object.fromEntries(data), "user")) {
        const req = await customFetch("server.php", "POST", data, Date.now());
        if (Object.is(!!(req.status >= 300), true)) {
            throw new Error("Server Runtime Error: " + req.status);
        }
        try {
            const res = await req.json();
            if (res.error) {
                alertMessage({
                    title: res.message,
                    icon: res.type ?? "error",
                });
                return;
            }
            alertMessage({
                title: res.message,
                icon: res.type ?? "success",
            });
            form.elements.item(form.elements.length - 1).innerHTML =
                "Subscribe";
            form.elements.item(form.elements.length - 1).disabled = false;
        } catch (err) {
            alertMessage({
                title: err.message,
                icon: "error",
            });
            console.warn(err.message);
        }
    }
}

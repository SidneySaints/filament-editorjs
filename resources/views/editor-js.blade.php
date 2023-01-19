<script>
    window.onload = () => {
        const editor = new EditorJS({
            holder: "editorJs",
            tools: {
                paragraph: {
                    class: window.Paragraph,
                    inlineToolbar: true,
                },
                image: {
                    class: ImageTool,
                    config: {
                        // endpoints: {
                        //     byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
                        //     byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
                        // }
                    }
                }
            },
            defaultBlock:'paragraph',
            onChange: async (api, event) => {
                const output = await api.saver.save();
                console.log(output)
            },
        })
    }

</script>

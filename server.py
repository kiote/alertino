import os

from tornado.ioloop import IOLoop
from tornado.web import RequestHandler, Application, url


class ContactSaveHandler(RequestHandler):
    def get(self):
        self.render("index.html", path=self.reverse_url("form"))

    def post(self):
        self.set_header("Content-Type", "text/plain")
        self.write("You wrote " + self.get_body_argument("name"))

settings = {
    "static_path": os.path.join(os.path.dirname(__file__), "static"),
}

app = Application([
    url(r"/", ContactSaveHandler),
    url(r"/save", ContactSaveHandler, name="form")
], **settings)
app.listen(8888)
IOLoop.current().start()

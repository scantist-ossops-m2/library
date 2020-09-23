<?php namespace October\Rain\Mail;

use App;
use Illuminate\Mail\Mailable as MailableBase;

/**
 * Generic mailable class.
 *
 * @package october\mail
 * @author Alexey Bobkov, Samuel Georges
 */
class Mailable extends MailableBase
{
    use \Illuminate\Bus\Queueable;
    use \Illuminate\Queue\SerializesModels;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this;
    }

    /**
     * Build the view data for the message.
     *
     * @return array
     */
    public function buildViewData()
    {
        $data = $this->viewData;

        // retrieved saved locale
        if (isset($data['_saved_locale'])) {
            App::setLocale($data['_saved_locale']);
            unset($data['_saved_locale']);
        }

        foreach ($data as $param => $value) {
            $data[$param] = $this->getRestoredPropertyValue($value);
        }

        return $data;
    }

    /**
     * Set serialized view data for the message.
     *
     * @param  array  $data
     * @return $this
     */
    public function withSerializedData($data)
    {
        // save current locale in $data to be serialized
        list($locale) = explode('-', App::getLocale());
        $data['_saved_locale'] = $locale;

        foreach ($data as $param => $value) {
            $this->viewData[$param] = $this->getSerializedPropertyValue($value);
        }

        return $this;
    }
    
    /**
     * Set the subject for the message.
     *
     * @param  \Illuminate\Mail\Message  $message
     * @return $this
     */
    protected function buildSubject($message)
    {
        // If a custom subject was set, then set it as the message subject
        // Otherwise attempt to set the subject if the message doesn't already have one set
        if ($this->subject) {
            $message->subject($this->subject);
        }
        return $this;
    }
}

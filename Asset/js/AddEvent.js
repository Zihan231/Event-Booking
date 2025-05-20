function AddEvent_Validation() {
  const EventName = document.getElementById("eventName").value;
  const EventDate = document.getElementById("eventDate").value;
  const EventTime = document.getElementById("eventTime").value;
  const EventLocation = document.getElementById("eventLocation").value;
  const EventDescription = document.getElementById("eventDescription").value;
  const EventThumbnail = document.getElementById("eventImage").value;
  const EventCategory = document.getElementById("eventCategory").value;
  const Price = document.getElementById("eventPrice").value;
  const capacity = document.getElementById("eventCapacity").value;
  const EventVenue = document.getElementById("eventVenue").value;

  let errorMsg = "";

  if (EventName === "") {
    errorMsg = "Event name is required";
  } else if (EventDate === "") {
    errorMsg = "Event date is required";
  } else if (EventTime === "") {
    errorMsg = "Event time is required";
  } else if (EventLocation === "") {
    errorMsg = "Event location is required";
  } else if (EventDescription === "") {
    errorMsg = "Event description is required";
  } else if (EventCategory === "") {
    errorMsg = "Please select an event category";
  } else if (EventThumbnail === "") {
    errorMsg = "Event thumbnail is required";
  } else if (Price === "" || Price < 0) {
    errorMsg = "Event price must be a non-negative number";
  } else if (capacity === "" || capacity < 1) {
    errorMsg = "Event capacity must be at least 1";
  } else if (EventVenue === "") {
    errorMsg = "Venue details are required";
  }

  if (errorMsg !== "") {
    //alert(errorMsg);
    document.getElementById("errorMessage").innerText = errorMsg;
    return false; 
  }

  return true; 
}
